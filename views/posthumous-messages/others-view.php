<div class="container-fluid container-posthomous-links">
    <div class="row">
    <div class="col-md-12 text-center">
        <h2 class="posthomousHeadings">View mine (other's view)</h2>
    </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class='table table-responsive table-striped table-bordered display' id="otherViewsTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Recipients</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    
                </thead>
                <tbody>
                    <tr>
                        <td>Name1</td>
                        <td>D1</td>
                        <td>Recipient1</td>
                        <td><button class="btn btn-primary"><i class="fa fa-pencil"></i></button></td>
                        <td><button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                    </tr>
                    <tr>
                        <td>Name2</td>
                        <td>D2</td>
                        <td>Recipient2</td>
                        <td><button class="btn btn-primary"><i class="fa fa-pencil"></i></button></td>
                        <td><button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                    </tr>
                    <tr>
                        <td>Name3</td>
                        <td>D3</td>
                        <td>Recipient3</td>
                        <td><button class="btn btn-primary"><i class="fa fa-pencil"></i></button></td>
                        <td><button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>  
    </div>
</div>    

<script>
    $(document).ready(function(){
       $('#otherViewsTable').DataTable({
                   
                            "pagingType": "full_numbers",
                    "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
                    "iDisplayLength": 5
                    
                }); 
    });
</script>    