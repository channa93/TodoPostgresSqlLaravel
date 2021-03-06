
@extends('backend.layouts.master')

@section('page-header')
    <h1>
        {!! app_name() !!}
        <small>List Todo</small>
    </h1>
@endsection

@section('before-scripts-end')
    <script type="text/javascript">
        function deleteTodo(task){
            alert('delete task: '+task.title);
            console.log(task);
            // debugger;
            // $.ajax({
            //     url: "delete",
            //     method:"GET",
            //     data:$id,
            //     success: function(data){
            //         alert(data);
            //     }
            // });
        }

        function saveTodo(task){
            alert('save task: '+task.title);
            console.log(task);
            debugger;
        }
        $(document).ready(function(){
            //alert('jquery ready function');
            $(".selection").change(function() {
                if(this.checked) {
                    console.log('checkbox');
                    $(this).closest("tr>td").next().css('text-decoration', 'line-through');
                    //$(this).closest("tr>td").next().addClass('done');
                    // $(this).closest('tr>button.btn-save').attr("disabled", true);
                                
                }else{
                    console.log('uncheck');
                    $(this).closest("tr>td").next().css('text-decoration', 'none');
                    //$(this).closest('tr>button.btn-delete').removeAttr("disabled");

                }
            });
            
        });
    </script>
@endsection
@section('before-style-end')
    <style type="text/css">
        .done{
            text-decoration: line-through;

        }
        .undone{
            text-decoration: none;
        }
    </style>
@endsection



@section('content')
    <h1>My Todo </h1>
    
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">
        <span class="glyphicon glyphicon-plus"></span> Add a new task
    </button>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"> Add new task</h4>
          </div>
          <div class="modal-body">
                <form class="form-horizontal" role="form" id="form-add-function">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="title">Title</label>
                        <div class="col-sm-10">          
                          <input type="text" class="form-control" name="title" placeholder="Enter task title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="description">Description</label>
                        <div class="col-sm-10">  
                         <textarea class="form-control" rows="5" name="description" placeholder="Enter task description "></textarea>        
                          
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="action">Deadline</label>
                        <div class="col-sm-10">          
                          <input type="datetime-local" class="form-control" name="deadline">
                          
                        </div>
                    </div>
    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" >
                            <span class="glyphicon  glyphicon-ok" aria-hidden="true"></span> Add </button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                            <span class="glyphicon  glyphicon-remove" aria-hidden="true"></span> Cancel</button>
                    </div>
                </form>
          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div> -->
        </div>

      </div>
    </div>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>Select</td>
                <td>Title</td>
                <td>Description</td>
                <td>Tool</td>

            </tr>
        </thead>
        <tbody>
        @foreach($todos as $key => $value)
            <tr>         
                <td><input type="checkbox" value="" name="selection" class="selection"></td>
                <td ><span class="done"> {{ $value->title }} </span></td>
                <td><p>{{ $value->description }}</p></td>  
                <td>       
                    <button class="btn btn-small btn-success btn-save" onclick="deleteTodo({{$value}})" >
                        <span class="glyphicon glyphicon-pencil"></span> Save</button>     
                    <button class="btn btn-small btn-danger btn-delete" onclick="deleteTodo({{$value}})" >
                        <span class="glyphicon glyphicon-remove"></span> Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table> 
@endsection