
@extends('layouts.admin._header')
@extends('layouts.admin._leftnav')

@php

  $DataCountryName=array();
  $DataCountryProducts=array();
  $DataProductTypeName=array();
  $DataCountryProductOfType=array();
@endphp






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <main class="mt-5 pt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h4>Bảng điều khiển</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card bg-primary text-white h-100">
            <div class="card-body py-5">{{ count($users) }} Người dùng <i class="bi bi-person-fill"></i></div>
            <div class="card-footer d-flex">
              <a style="display:inline-block; color:white; text-decoration:none;" href="{{ url('managerusers') }}">Xem chi tiết</a>
              
              <span class="ms-auto">
                <i class="bi bi-chevron-right"></i>
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card bg-warning text-dark h-100">
            <div class="card-body py-5">{{ count($products) }} Sản phẩm <i class="bi bi-box-seam"></i></div>
            <div class="card-footer d-flex">
              <a style="display:inline-block; color:black; text-decoration:none;" href="{{ url('managerproduct') }}">Xem chi tiết</a>
              <span class="ms-auto">
                <i class="bi bi-chevron-right"></i>
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card bg-success text-white h-100">
            <div class="card-body py-5">{{ count($orders) }} Đơn hàng <i class="bi bi-receipt-cutoff"></i></div>
            <div class="card-footer d-flex">
              <a style="display:inline-block; color:white; text-decoration:none;" href="{{ url('managerorder') }}">Xem chi tiết</a>
              <span class="ms-auto">
                <i class="bi bi-chevron-right"></i>
              </span>
            </div>
          </div>
        </div>
        
      </div>
     
      @foreach ($countrys as $country )
        @php
          array_push($DataCountryName, $country->name);
          array_push($DataCountryProducts, count($country->products));
        @endphp 
        
      @endforeach
      @foreach ($productTypes as $productType )
        @php
          array_push($DataProductTypeName, $productType->name);
          array_push($DataCountryProductOfType, count($productType->products));
        @endphp 
        
      @endforeach
      <div class="row">
        <div class="col-md-6 mb-3">
          <div class="card h-100">
            <div class="card-header">
              <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
              Số lượng sản phẩm trên từng quốc gia
            </div>
            <div class="card-body">
              <div class="map_canvas">
                <canvas id="ProductInCountryChart" width="400" height="200"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <div class="card h-100">
            <div class="card-header">
              <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
              Loại sản phẩm
            </div>
            <div class="card-body">
              <div class="map_canvas">
                <canvas id="ProductOfTypeChart" width="400" height="200"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- Show Graph Data -->
<script src="https://cdnjs.com/libraries/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>



<script>
var ctx = document.getElementById('ProductInCountryChart').getContext('2d');
var ProductInCountryChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode($DataCountryName); ?>,
        datasets: [{
            label: '',
            data: <?php echo json_encode($DataCountryProducts); ?>,
            backgroundColor: [
                'rgba(31, 58, 147, 1)',
                'rgba(37, 116, 169, 1)',
                'rgba(92, 151, 191, 1)',
                'rgb(200, 247, 197)',
                'rgb(77, 175, 124)',
                'rgb(30, 130, 76)'
            ],
            borderColor: [
                'rgba(31, 58, 147, 1)',
                'rgba(37, 116, 169, 1)',
                'rgba(92, 151, 191, 1)',
                'rgb(200, 247, 197)',
                'rgb(77, 175, 124)',
                'rgb(30, 130, 76)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                max: 15,
                min: 0,
                ticks: {
                    stepSize: 1
                }
            }
        },
        plugins: {
            title: {
                display: false,
                text: 'Custom Chart Title'
            },
            legend: {
                display: false,
            }
        }
    }
});
var ctx1 = document.getElementById('ProductOfTypeChart').getContext('2d');
var ProductOfTypeChart = new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode($DataProductTypeName); ?>,
        datasets: [{
            label: '',
            data: <?php echo json_encode($DataCountryProductOfType); ?>,
            backgroundColor: [
                'rgba(31, 58, 147, 1)',
                'rgba(37, 116, 169, 1)',
                'rgba(92, 151, 191, 1)',
                'rgb(200, 247, 197)',
                'rgb(77, 175, 124)',
                'rgb(30, 130, 76)'
            ],
            borderColor: [
                'rgba(31, 58, 147, 1)',
                'rgba(37, 116, 169, 1)',
                'rgba(92, 151, 191, 1)',
                'rgb(200, 247, 197)',
                'rgb(77, 175, 124)',
                'rgb(30, 130, 76)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                max: 25,
                min: 0,
                ticks: {
                    stepSize: 1
                }
            }
        },
        plugins: {
            title: {
                display: false,
                text: 'Custom Chart Title'
            },
            legend: {
                display: false,
            }
        }
    }
});
</script>
</body>
</html>
    
