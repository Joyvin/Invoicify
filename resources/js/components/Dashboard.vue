<template>
  <div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="total-revenue-chart"></div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1">₹<span data-plugin="counterup">{{this.income}}</span></h4>
                    <p class="text-muted mb-0">Total Revenue</p>
                </div>
                <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i
                            class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> since last week
                </p>
            </div>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="orders-chart"> </div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{this.expense}}</span></h4>
                    <p class="text-muted mb-0">Expenses</p>
                </div>
                <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i
                            class="mdi mdi-arrow-down-bold me-1"></i>0.82%</span> since last week
                </p>
            </div>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="customers-chart"> </div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{this.orders}}</span></h4>
                    <p class="text-muted mb-0">Orders</p>
                </div>
                <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i
                            class="mdi mdi-arrow-down-bold me-1"></i>6.24%</span> since last week
                </p>
            </div>
        </div>
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">

        <div class="card">
            <div class="card-body">
                <div class="float-end mt-2">
                    <div id="growth-chart"></div>
                </div>
                <div>
                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{this.profits}}</span>%</h4>
                    <p class="text-muted mb-0">Profit</p>
                </div>
                <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i
                            class="mdi mdi-arrow-up-bold me-1"></i>10.51%</span> since last week
                </p>
            </div>
        </div>
    </div> <!-- end col-->
</div> <!-- end row-->

<div class="row">
    <div class="">
        <div class="card">
            <div class="card-body">
                <div class="float-end">
                    <div class="dropdown">
                        <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton5"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="fw-semibold">Sort By:</span> <span class="text-muted">Yearly<i
                                    class="mdi mdi-chevron-down ms-1"></i></span>
                        </a>
                    </div>
                </div>
                <h4 class="card-title mb-4">Sales Analytics</h4>

                <div class="mt-1">
                    <ul class="list-inline main-chart mb-0">
                        <li class="list-inline-item chart-border-left me-0 border-0">
                            <h3 class="text-primary">$<span data-plugin="counterup">{{this.income}}</span><span
                                    class="text-muted d-inline-block font-size-15 ms-3">Income</span></h3>
                        </li>
                        <li class="list-inline-item chart-border-left me-0">
                            <h3><span data-plugin="counterup">{{this.orders}}</span><span
                                    class="text-muted d-inline-block font-size-15 ms-3">Sales</span>
                            </h3>
                        </li>
                        <li class="list-inline-item chart-border-left me-0">
                            <h3><span data-plugin="counterup">3.6</span>%<span
                                    class="text-muted d-inline-block font-size-15 ms-3">Conversation Ratio</span></h3>
                        </li>
                    </ul>
                </div>

                <div class="mt-3">
                    <div id="sales-analytics-chart" class="apex-charts" dir="ltr"></div>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div> <!-- end row-->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Latest Transaction</h4>
                <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 20px;">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                        <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                    </div>
                                </th>
                                <th>Order ID</th>
                                <th>Billing Name</th>
                                <th>Date</th>
                                <th>Total</th>
                                <th>Payment Status</th>
                                <th>Payment Method</th>
                                <th>View Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2540</a> </td>
                                <td>Neal Matthews</td>
                                <td>
                                    07 Oct, 2019
                                </td>
                                <td>
                                    $400
                                </td>
                                <td>
                                    <span class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                        View Details
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="customCheck3">
                                        <label class="form-check-label" for="customCheck3">&nbsp;</label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2541</a> </td>
                                <td>Jamal Burnett</td>
                                <td>
                                    07 Oct, 2019
                                </td>
                                <td>
                                    $380
                                </td>
                                <td>
                                    <span class="badge rounded-pill bg-soft-danger font-size-12">Chargeback</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-visa me-1"></i> Visa
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                        View Details
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="customCheck4">
                                        <label class="form-check-label" for="customCheck4">&nbsp;</label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2542</a> </td>
                                <td>Juan Mitchell</td>
                                <td>
                                    06 Oct, 2019
                                </td>
                                <td>
                                    $384
                                </td>
                                <td>
                                    <span class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-paypal me-1"></i> Paypal
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="customCheck5">
                                        <label class="form-check-label" for="customCheck5">&nbsp;</label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2543</a> </td>
                                <td>Barry Dick</td>
                                <td>
                                    05 Oct, 2019
                                </td>
                                <td>
                                    $412
                                </td>
                                <td>
                                    <span class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="customCheck6">
                                        <label class="form-check-label" for="customCheck6">&nbsp;</label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2544</a> </td>
                                <td>Ronald Taylor</td>
                                <td>
                                    04 Oct, 2019
                                </td>
                                <td>
                                    $404
                                </td>
                                <td>
                                    <span class="badge rounded-pill bg-soft-warning font-size-12">Refund</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-visa me-1"></i> Visa
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="customCheck7">
                                        <label class="form-check-label" for="customCheck7">&nbsp;</label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#MB2545</a> </td>
                                <td>Jacob Hunter</td>
                                <td>
                                    04 Oct, 2019
                                </td>
                                <td>
                                    $392
                                </td>
                                <td>
                                    <span class="badge rounded-pill bg-soft-success font-size-12">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-paypal me-1"></i> Paypal
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: 'Dashboard',
    data(){
        return{
            income: '',
            expense: '',
            orders: '',
            profits: 0
        }
    },
    
    methods:{
        async getData(){
            var res = await axios.post("https://invoicifyFunc.azurewebsites.net/api/invoFunc?task=getStatements&month=2023-01&code=D1RwUMVE_8Syv5kso5OMZmAxdbG23OAcfH3a1PxtKMBEAzFu_p9SNw==").then((e)=>{return JSON.parse(e.data.replaceAll("'",'"'))} )
            this.income = res["income"]
            this.expense = res["expense"]
            this.orders = res["orders"]
            this.profits = res["profit"].toFixed(2)
        }
    },

    mounted(){
        this.getData()
        var options1 = {
        series: [{
            data: [25, 66, 41, 89, 63]
        }],
        fill: {
            colors: ['#5b73e8']
        },
        chart: {
            type: 'bar',
            width: 70,
            height: 40,
            sparkline: {
            enabled: true
            }
        },
        plotOptions: {
            bar: {
            columnWidth: '50%'
            }
        },
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        xaxis: {
            crosshairs: {
            width: 1
            }
        },
        tooltip: {
            fixed: {
            enabled: false
            },
            x: {
            show: false
            },
            y: {
            title: {
                formatter: function formatter(seriesName) {
                return '';
                }
            }
            },
            marker: {
            show: false
            }
        }
        };
        var chart1 = new ApexCharts(document.querySelector("#total-revenue-chart"), options1);
        chart1.render(); //
        // Orders Chart
        //

        var options = {
        fill: {
            colors: ['#34c38f']
        },
        series: [70],
        chart: {
            type: 'radialBar',
            width: 45,
            height: 45,
            sparkline: {
            enabled: true
            }
        },
        dataLabels: {
            enabled: false
        },
        plotOptions: {
            radialBar: {
            hollow: {
                margin: 0,
                size: '60%'
            },
            track: {
                margin: 0
            },
            dataLabels: {
                show: false
            }
            }
        }
        };
        var chart = new ApexCharts(document.querySelector("#orders-chart"), options);
        chart.render(); // 
        // Customers Chart
        //

        var options = {
        fill: {
            colors: ['#5b73e8']
        },
        series: [55],
        chart: {
            type: 'radialBar',
            width: 45,
            height: 45,
            sparkline: {
            enabled: true
            }
        },
        dataLabels: {
            enabled: false
        },
        plotOptions: {
            radialBar: {
            hollow: {
                margin: 0,
                size: '60%'
            },
            track: {
                margin: 0
            },
            dataLabels: {
                show: false
            }
            }
        }
        };
        var chart = new ApexCharts(document.querySelector("#customers-chart"), options);
        chart.render(); // 
        // Growth Chart
        //

        var options2 = {
        series: [{
            data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
        }],
        fill: {
            colors: ['#f1b44c']
        },
        chart: {
            type: 'bar',
            width: 70,
            height: 40,
            sparkline: {
            enabled: true
            }
        },
        plotOptions: {
            bar: {
            columnWidth: '50%'
            }
        },
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        xaxis: {
            crosshairs: {
            width: 1
            }
        },
        tooltip: {
            fixed: {
            enabled: false
            },
            x: {
            show: false
            },
            y: {
            title: {
                formatter: function formatter(seriesName) {
                return '';
                }
            }
            },
            marker: {
            show: false
            }
        }
        };
        var chart2 = new ApexCharts(document.querySelector("#growth-chart"), options2);
        chart2.render(); //
        // Sales Analytics Chart

        var options = {
        chart: {
            height: 339,
            type: 'line',
            stacked: false,
            toolbar: {
            show: false
            }
        },
        stroke: {
            width: [0, 2, 4],
            curve: 'smooth'
        },
        plotOptions: {
            bar: {
            columnWidth: '30%'
            }
        },
        colors: ['#5b73e8', '#dfe2e6', '#f1b44c'],
        series: [{
            name: 'Profit',
            type: 'column',
            data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
        }, {
            name: 'Revenue',
            type: 'area',
            data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43]
        }, {
            name: 'Growth',
            type: 'line',
            data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39]
        }],
        fill: {
            opacity: [0.85, 0.25, 1],
            gradient: {
            inverseColors: false,
            shade: 'light',
            type: "vertical",
            opacityFrom: 0.85,
            opacityTo: 0.55,
            stops: [0, 100, 100, 100]
            }
        },
        labels: ['01/01/2022', '02/01/2022', '03/01/2022', '04/01/2022', '05/01/2022', '06/01/2022', '07/01/2022', '08/01/2022', '09/01/2022', '10/01/2022', '11/01/2022'],
        markers: {
            size: 0
        },
        xaxis: {
            type: 'datetime'
        },
        yaxis: {
            title: {
            text: 'Points'
            }
        },
        tooltip: {
            shared: true,
            intersect: false,
            y: {
            formatter: function formatter(y) {
                if (typeof y !== "undefined") {
                return y.toFixed(0) + " points";
                }

                return y;
            }
            }
        },
        grid: {
            borderColor: '#f1f1f1'
        }
        };
        var chart = new ApexCharts(document.querySelector("#sales-analytics-chart"), options);
        chart.render();
    }
}
</script>
<style>

</style>