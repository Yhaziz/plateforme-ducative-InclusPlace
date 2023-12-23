<style>
  .center-checkbox {
    text-align: center;
  }

  .center-text {
    text-align: center;
  }

  .center-text1 {
    text-align: center;
  }


  

</style>

<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
<!--*****Edit Student Subjects***** -->   
<div class="modal msk-fade" id="modalEditSubject" tabindex="-1" role="dialog" aria-labelledby="tt3" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="container">
            <!-- modal-content -->
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button><!-- MSK-000128 -->
                            <h3 class="panel-title">Add Student Evaluation</h3>
                        </div>
                        <div class="panel-body">
                            <!-- Start of modal body -->
                            <!-- Modify the form action to point to the PHP script that will handle the form submission -->
                            <form id="evaluationForm" action="../model/add_student_evaluation.php" method="POST">
                                <!-- Include the category name as a label for each group of checkboxes -->
                                <h4>(المزاج) HUMEUR</h4>
                                <table id="" class="table">
                                    <thead>
                                        <tr>
                                            
                                            <th class="center-text"><img src="../dist/img/sun.png" alt="Sun Image" width="60" height="60"></th>
                                            <th class="center-text"><img src="../dist/img/cloud_sun.png" alt="cloud sun Image" width="60" height="60"></th>
                                            <th class="center-text"><img src="../dist/img/rain.png" alt="rain Image" width="60" height="60"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="center-checkbox"><input type="checkbox" name="checkbox_humeur[]" value="1"></td>
                                            <td class="center-checkbox"><input type="checkbox" name="checkbox_humeur[]" value="2"></td>
                                            <td class="center-checkbox"><input type="checkbox" name="checkbox_humeur[]" value="3"></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <h4>(المشاركة) PARTICIPATION</h4>
                                <table id="" class="table">
                                    <thead>
                                        <tr>
                                            
                                            <th class="center-text"><img src="../dist/img/sun.png" alt="Sun Image" width="60" height="60"></th>
                                            <th class="center-text"><img src="../dist/img/cloud_sun.png" alt="cloud sun Image" width="60" height="60"></th>
                                            <th class="center-text"><img src="../dist/img/rain.png" alt="rain Image" width="60" height="60"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="center-checkbox"><input type="checkbox" name="checkbox_participation[]" value="1"></td>
                                            <td class="center-checkbox"><input type="checkbox" name="checkbox_participation[]" value="2"></td>
                                            <td class="center-checkbox"><input type="checkbox" name="checkbox_participation[]" value="3"></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <h4>(التواصل) COMMUNICATION</h4>
                                <table id="" class="table">
                                    <thead>
                                        <tr>
                                            
                                            <th class="center-text"><img src="../dist/img/sun.png" alt="Sun Image" width="60" height="60"></th>
                                            <th class="center-text"><img src="../dist/img/cloud_sun.png" alt="cloud sun Image" width="60" height="60"></th>
                                            <th class="center-text"><img src="../dist/img/rain.png" alt="rain Image" width="60" height="60"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="center-checkbox"><input type="checkbox" name="checkbox_communication[]" value="1"></td>
                                            <td class="center-checkbox"><input type="checkbox" name="checkbox_communication[]" value="2"></td>
                                            <td class="center-checkbox"><input type="checkbox" name="checkbox_communication[]" value="3"></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <h4>(اللمجة) GOÛTER</h4>
                                <table id="" class="table">
                                    <thead>
                                        <tr>
                                            
                                            <th class="center-text"><img src="../dist/img/sun.png" alt="Sun Image" width="60" height="60"></th>
                                            <th class="center-text"><img src="../dist/img/cloud_sun.png" alt="cloud sun Image" width="60" height="60"></th>
                                            <th class="center-text"><img src="../dist/img/rain.png" alt="rain Image" width="60" height="60"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="center-checkbox"><input type="checkbox" name="checkbox_gouter[]" value="1"></td>
                                            <td class="center-checkbox"><input type="checkbox" name="checkbox_gouter[]" value="2"></td>
                                            <td class="center-checkbox"><input type="checkbox" name="checkbox_gouter[]" value="3"></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <h4>(النظافة) PROPRETE</h4>
                                <table id="" class="table">
                                    <thead>
                                        <tr>
                                            
                                            <th class="center-text"><img src="../dist/img/sun.png" alt="Sun Image" width="60" height="60"></th>
                                            <th class="center-text"><img src="../dist/img/cloud_sun.png" alt="cloud sun Image" width="60" height="60"></th>
                                            <th class="center-text"><img src="../dist/img/rain.png" alt="rain Image" width="60" height="60"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="center-checkbox"><input type="checkbox" name="checkbox_proprete[]" value="1"></td>
                                            <td class="center-checkbox"><input type="checkbox" name="checkbox_proprete[]" value="2"></td>
                                            <td class="center-checkbox"><input type="checkbox" name="checkbox_proprete[]" value="3"></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                    <table id="" class="table">
                                    <tbody>
                                        <tr>
                                        <td class="center-text">
                                        <label for="comments">Write Notes:</label>
                                        <textarea id="comments" name="comments" class="form-control" placeholder="Enter your comments here" rows="4"></textarea>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                            </table>

                                            <table id="" class="table">
                                    <tbody>
                                        <tr>
                                        <td class="center-text">
                                        <span style="color: red;">If there is no comment on your part, please write: I reviewed it</span>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                            </table>
                                
                                <!-- Include any hidden fields you need (e.g., index, classroom) -->
                                <input type="hidden" name="index" value="<?php echo $index; ?>">
                                <input type="hidden" name="classroom" value="<?php echo $id1; ?>">
                                <!-- Modify the button to submit the form -->
                                <button type="submit" class="btn btn-info" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>Submit</button>
                            </form>
                        </div>
                    </div><!--/.panel-->
                </div><!--/.col-md-3 -->
            </div><!--/.row-->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!--/.Modal-Add form -->