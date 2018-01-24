           <!-- Button trigger modal -->
          <p align="center"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Add New Contract
          </button></p>

          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Add Information</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="{{ url('/add') }}" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <!-- Task Name -->
             
                <div>
                    <label for="name">Name</label>
                </div>
              
                <div class="form-group">
                    <input type="text" name="name" id="name" class="form-control">  
                </div>

                <div>
                    <label for="phone">Phone</label>
                </div>
              
                <div class="form-group">
                    <input type="text" name="phone" id="phone" class="form-control">  
                </div>

                <div>
                    <label for="email">Email</label>
                </div>
              
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control">  
                </div>
            
                
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-plus"></i> Add Person</button>
            </form> 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
                </div>
              </div>
            </div>
          </div>