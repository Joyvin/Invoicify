<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use File;
use Auth;

class StorageController extends Controller
{
    public function index(Request $request){
        return view('storage');
    }

    public function getDocs(Request $request){
        $files = Storage::disk('azure')->Files($request->dir);
        $dirs = Storage::disk('azure')->directories($request->dir);
        return Response()->json([
            "dirs" => $dirs,
            "files" => $files,
        ]);
    }

    public function deleteFile(Request $request){
        Storage::disk('azure')->delete($request->file);
    }

    public function renameFile(Request $request){
        $oldName = $request->oldName;
        $newName = $request->newName;

        Storage::disk('azure')->move($oldName, $newName);
    }

    public function uploadFile(Request $request){
        $validatedData = $request->validate([
			'files' => 'required|mimes:doc,docx,pdf,txt,png|max:25600'
		]);

        if($request->TotalFiles > 0){
            for ($x = 0; $x < $request->TotalFiles; $x++){
                $parent = $request->parent;
                if ($request->hasFile('files'.$x)){
                    $file = $request->file('files'.$x);
                    $name = preg_replace('/[^a-zA-Z0-9_.]/', '', $file->getClientOriginalName());
                    $fpath = $parent . '/' . $name;
                    $prj = explode('/', $parent)[0];
                    Storage::disk('azure')->put($fpath, File::get($file));
                }
            }
        }

    }

    public function createFolder(Request $request){
        Storage::disk('azure')->put($request->dir.'/temp', 'delete');
        Storage::disk('azure')->delete($request->dir.'/temp');
    }

    public function deleteFolder(Request $request){
        $body = '{"dirs": ['. '"' . $request->dir . '"]}';
        deleteAllFolder($body);
    }

    public function deleteAllFolder($body){
        $curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://bca-sync-func.azurewebsites.net/api/perform?operation=deleteFolder',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		CURLOPT_POSTFIELDS => $body ,
		CURLOPT_HTTPHEADER => array(
			'Content-Type: application/json'
		),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		return $response;
    }

    
    function generateRandomString($tableClient, $projectID, $recurse = 50, $length = 20) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
    
        try    {
            $result = $tableClient->getEntity("Qnakbsync", $projectID, $randomString);
        }
        catch(ServiceException $e){
            return $randomString;
        }
        
        if ($recurse - 1 > 0) {
            return $this->generateRandomString($tableClient, $projectID, $recurse - 1);
        } else {
            $code = $e->getCode();
            $error_message = $e->getMessage();
            return 'Error';
        }
    }

}
