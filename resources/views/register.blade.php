@extends("theme")
@section("content")

<div class="container">
            <div class="row">
                <div class="col col-12 col-sm-6 col-lg-6">
                    <img height="500px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDglPhu6B8wmEw6vE5Bx9vZsCFhuof5v-TWA&usqp=CAU"></img>
                </div>
                <div class="col col-12 col-sm-3 col-sm-6 col-lg-6">
                    <table class="table">
                      <h2><center>New??REGISTER NOW</center></h2>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Email Id</td>
                            <td><input type="email" name="email" id="email"></td>
                        </tr>
                        
                        <tr>
                            <td>Gender</td>
                            <td><input type="checkbox" name="Male" id="Male">Male</td>
                            <td><input type="checkbox" name="Female" id="Female">Female</td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td><input type="date" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>State</td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>District</td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                          <td>Phone No</td>
                          <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td><button class="btn btn-success">Submit</button></td>
                        </tr>
                       
                    </table>
                </div>

            
        </div>

        @endsection