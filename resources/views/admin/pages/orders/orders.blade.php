@extends('admin.master.template')
@section('headerButton')
            <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item">
                    <a href="addorder" class="nav-link">Add Order</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Orders List</a>
                    </li>
            </ul>
@endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">

    
    <div class="um-img">
    <img src="/images/undermaintenance-img.png" alt="">
    </div>

   <div class="um-img">PAGE UNDER CONSTRUCTION</div>


    <div class="company-logo"><img src="/img/logo.png" alt=""></div>
    <div class="page-desc">Our website is coming soon. </div>
    <div class="page-desc1">"This page will show, create, edit and delete orders."</div>
    <!-- <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Orders List</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            <input type="checkbox" name="deletereview"/>
                          </th>
                          <th>
                            Customer
                          </th>
                          <th>
                            Product
                          </th>
                          <th>
                            Quantity
                          </th>
                          <th>
                            Order Date
                          </th>
                          <th>
                            Total Price
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                          <input type="checkbox" name="deletereview"/>
                          </td>
                          <td>
                            Juan Dela Cruz
                          </td>
                          <td>
                            Product 1
                          </td>
                          <td>
                            10
                          </td>
                          <td>
                            10/10/2018
                          </td>
                          <td>
                            Php 550.00
                          </td>
                          <td>
                          <button type="button" class="btn btn-dark btn-fw">
                          <i class="mdi mdi-pencil-box-outline"></i>Edit</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div> -->
    </div>
</div>
@endsection