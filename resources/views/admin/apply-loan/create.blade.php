@extends('layouts.admin')

@section('content')

<div class="pcoded-main-container">
  <div class="pcoded-wrapper">
      <div class="pcoded-content">
          <div class="pcoded-inner-content">

<div class="main-panel">
    <div class="content-wrapper">


<div class="col-12 grid-margin stretch-card">

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic / Personal Informations</h4>

        <hr>

        <form class="forms-sample" method="POST" action="{{ route('admin.apply-loan.store')}}">
            @csrf

            <div class="row">
              <div class="col">
              <div class="form-group">
                <input type="text" class="form-control" id="f_name" name="f_name" placeholder="First Name">
                <!-- Add the "name" attribute above -->
            </div>
              </div>
              <div class="col">
            <div class="form-group">
              <input type="text" class="form-control" id="m_name" name="m_name" placeholder="Middle Name">
              <!-- Add the "name" attribute above -->
          </div>
              </div>

              <div class="col">

          <div class="form-group">
            <input type="text" class="form-control" id="l_name" name="l_name" placeholder="Last Name">
            <!-- Add the "name" attribute above -->
        </div>
              </div>

            </div>

            <div class="row">
              <div class="col">
              <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                <!-- Add the "name" attribute above -->
            </div>
              </div>
              <div class="col">
            <div class="form-group">
              <input type="number" class="form-control" id="phone" name="phone" placeholder="Mobile Number">
              <!-- Add the "name" attribute above -->
          </div>
              </div>

              <div class="col">

          <div class="form-group">
            <input type="text" class="form-control" id="address" name="address" placeholder="Physical Address">
            <!-- Add the "name" attribute above -->
        </div>
              </div>

            </div>


            <div class="row">
              <div class="col">
                <div class="form-group">
                  <select class="form-control" id="id_type" name="id_type">
                    <option value="default">Select ID</option>
                      <option value="National Identity Card (NIDA)">National Identity Card (NIDA)</option>
                      <option value="Driving License">Driving License</option>
                      <option value="Voters ID">Voters ID</option>
                      <!-- Add more options as needed -->
                  </select>
              </div>
              </div>
              <div class="col">
            <div class="form-group">
              <input type="text" class="form-control" id="id_number" name="id_number" placeholder="ID Number">
              <!-- Add the "name" attribute above -->
          </div>
              </div>

  
            </div>


            <h4 class="card-title">Employment Informations</h4>

            <hr>

            <div class="row">
              <div class="col">
                <div class="form-group">
                  <input type="text" class="form-control" id="employer" name="employer" placeholder="Organization Name (Employer)">
              </div>
              </div>
              <div class="col">
            <div class="form-group">
              <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Ocuppation">
              <!-- Add the "name" attribute above -->
          </div>
              </div>

  
            </div>

            <div class="row">
              <div class="col">
                <div class="form-group">
                  <input type="text" class="form-control" id="employer_address" name="employer_address" placeholder="Physical Address">
              </div>
              </div>
              <div class="col">
            <div class="form-group">
              <input type="number" class="form-control" id="monthly_salary" name="monthly_salary" placeholder="Monthly Salary">
              <!-- Add the "name" attribute above -->
          </div>
              </div>

  
            </div>

            <h4 class="card-title">Collateral Informations</h4>

            <hr>

            <div class="row">
              <div class="col">
                <div class="form-group">
                  <input type="text" class="form-control" id="c_fname" name="c_fname" placeholder="First Name">
              </div>
              </div>

              <div class="col">
                <div class="form-group">
                  <input type="text" class="form-control" id="c_mname" name="c_mname" placeholder="Middle Name">
              </div>
              </div>


              <div class="col">
            <div class="form-group">
              <input type="text" class="form-control" id="c_lname" name="c_lname" placeholder="Last Name">
              <!-- Add the "name" attribute above -->
          </div>
              </div>

  
            </div>


            <div class="row">
              <div class="col">
              <div class="form-group">
                <input type="email" class="form-control" id="collateral_email" name="collateral_email" placeholder="Email Address">
                <!-- Add the "name" attribute above -->
            </div>
              </div>
              <div class="col">
            <div class="form-group">
              <input type="number" class="form-control" id="collateral_phone" name="collateral_phone" placeholder="Mobile Number">
              <!-- Add the "name" attribute above -->
          </div>
              </div>

              <div class="col">

          <div class="form-group">
            <input type="text" class="form-control" id="collateral_address" name="collateral_address" placeholder="Physical Address">
            <!-- Add the "name" attribute above -->
        </div>
              </div>

            </div>

            <div class="row">
              <div class="col">
                <div class="form-group">
                  <select class="form-control" id="collateral_id_type" name="collateral_id_type">
                    <option value="default">Select ID</option>
                      <option value="National Identity Card (NIDA)">National Identity Card (NIDA)</option>
                      <option value="Driving License">Driving License</option>
                      <option value="Voters ID">Voters ID</option>
                      <!-- Add more options as needed -->
                  </select>
              </div>
              </div>
              <div class="col">
            <div class="form-group">
              <input type="text" class="form-control" id="collateral_id_number" name="collateral_id_number" placeholder="ID Number">
              <!-- Add the "name" attribute above -->
          </div>
              </div>

  
            </div>

            <h4 class="card-title">Loan Informations</h4>
            <hr>

            <div class="row">
             

              <div class="col">
                  <div class="form-group">
                    <select class="form-control" id="loan_type" name="loan_type">
                      <option value="default">Select Loan Type</option>
                        <option value="National Identity Card (NIDA)">Individual Loans</option>
                        <option value="Driving License">Group Loans</option>
                        <option value="Voters ID">Insurance Loans</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                </div>

              <div class="col">
                <div class="form-group">
                  <input type="number" class="form-control" id="loan_amount" name="loan_amount" placeholder="Loan Amount (TZS)">
              </div>
              </div>

             

  
            </div>

            <div class="row">
              <div class="col">
                <div class="form-group">
                  <input type="number" class="form-control" id="interest" name="interest" placeholder="Interest" disabled>
              </div>
              </div>


              <div class="col">
            <div class="form-group">
              <input type="number" class="form-control" id="loan_emi" name="loan_emi" placeholder="EMI Amount" disabled>
              <!-- Add the "name" attribute above -->
          </div>
              </div>
            </div>

            
            <button type="submit" class="btn btn-primary me-2">{{ __('Submit') }}</button>
            <button class="btn btn-light">{{ __('Cancel') }}</button>
        </form>
        
      </div>
    </div>
  </div>

    </div>
    
</div>
          </div>
      </div>
  </div>

    @endsection