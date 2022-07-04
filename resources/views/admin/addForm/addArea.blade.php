@extends('layouts.admin-layouts')
@section('content')  
    <section class="content">
      <div class="container-fluid">
      
            
             
              <form action="{{ route('save_area')}}"method="POST"  enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card">

                  <fieldset>
                    <legend><center><b>Information</b></center></legend>
                   
                  </fieldset>
                  {{-- <fieldset>
                    <div class="form-group row">
                    <label for="district_name" class="col-sm-3 col-form-label text-right">District Name</label>
                    <div class="col-sm-6">
                    <input type="text" name="district_name" id='district_name' class="form-control" placeholder="Enter District Name..."  >
               
                --}}
               
               
                    <fieldset>
                      <div class="form-group row">
                        <label for="district_name" class="col-sm-3 col-form-label text-right">District Name</label>
                        <div class="col-sm-6">
                      <select name="district_name" class="form-control selectpicker"  data-live-search="true" aria-label="Default select example">
                          <option value="Dhaka">Dhaka</option>
                          <option  value="Chittagong">Chittagong</option>
                          <option value="Barisal">Barisal</option>                     
                          <option value="khulna">khulna</option>                     
                          <option value="Tangail">Tangail</option>                     
                      </select>
                
                  </div>
                </div>
                  </fieldset>
                  <fieldset>
                    <div class="form-group row">
                      <label for="market_name" class="col-sm-3 col-form-label text-right">Market Name</label>
                      <div class="col-sm-6">          
                        <select name="market_name" class="form-control selectpicker"  data-live-search="true" aria-label="Default select example">
                          <option value="Jamuna Future park">Jamuna Future Park</option>
                          <option value="Bashundara Shopping Mall">Bashundara Shopping Mall</option>
                          <option value="Banani Kacha Bazar">Banani Kacha Bazar</option>                                         
                      </select>
                  </div>
                </div>
                  </fieldset>

                  <fieldset>
                    <div class="form-group row">
                      <label for="shop_name" class="col-sm-3 col-form-label text-right">Shop Name</label>
                      <div class="col-sm-6">
                    <input type="text" name="shop_name" id="shop_name" class="form-control" placeholder="Enter Shop Name...">

                    <table class="table table-striped table-bordered">
                    
                      <tbody>

                      </tbody>
                    </tr>
               </table>&nbsp
                  
                 
                 <center>
                    <button type="submit" class="btn btn-primary submit-Btn">Submit</button>
                  </center>
                  </fieldset>


                 
                        </tbody>
                       </table>
                      </div>
                     </div>    
                    </div>
                   </div>
                 
                 
             
                 


                </div>
                
              </form>
            </div>
          </div>

        </div>
      </div>
        
    </section>
    <script>
      $(document).ready(function(){
      
       fetch_customer_data();
      
       function fetch_customer_data(query = '')
       {
        $.ajax({
         url:"{{ route('add_Area.search') }}",
         method:'GET',
         data:{query:query},
         dataType:'json',
         success:function(data)
         {
          $('tbody').html(data.table_data);
          // $('#total_records').text(data.total_data);
         }
        })
       }
      
       $(document).on('keyup', '#shop_name', function(){
        var query = $(this).val();
        fetch_customer_data(query);
       });
      });
      </script>

  
  @endsection