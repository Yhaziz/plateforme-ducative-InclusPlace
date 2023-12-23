<?php
if (!isset($_SERVER['HTTP_REFERER'])) {
    header('Location: ../index.php');
    exit;
}

include_once('../controller/config.php');

$friend_type = isset($_GET['friend_type']) ? $_GET['friend_type'] : '';

if (
    $friend_type === "Teacher" || 
    $friend_type === "Parent" || 
    $friend_type === "Avs" || 
    $friend_type === "Doctor" ||
    $friend_type === "Admin" || 
    $friend_type === "Student"
) {
    $index = $_GET['friend_index'];

    $table_name = strtolower($friend_type);
    $parent_fields = $friend_type === "Student" ? ", parents.*" : "";
    $join_clause = $friend_type === "Student" ? "LEFT JOIN parents ON student.index_number = parents.my_son_index" : "";

    $name_field = $friend_type === "Doctor" ? "spec" : "surname";

    $sql = "SELECT $table_name.*, $table_name.$name_field AS friend_name $parent_fields 
            FROM $table_name 
            $join_clause 
            WHERE $table_name.index_number = '$index'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $surname = $row['friend_name'];
    $fname = $row['fname'];
    $image = $row['image_name'];
    $address = $row['address'];
    $gender = $row['gender'];
    $téléphone = $row['téléphone'];
    $email = $row['email'];

    $g_name = $g_address = $g_email = $g_téléphone = "";
    if ($friend_type === "Student") {
        $g_name = $row['surname'];
        $g_address = $row['address'];
        $g_email = $row['email'];
        $g_téléphone = $row['téléphone'];
    }
}
?>

<div class="modal msk-fade" id="modalviewFriend" tabindex="-1" role="dialog" aria-labelledby="insert_alert1" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="container col-lg-12 ">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading bg-aqua-active">    
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                            <h4 class="panel-title" id="hname"><?php echo $surname; ?></h4>
                        </div>              
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3"> 
                                    <img id="photo2" alt="User Pic" src="../<?php echo $image; ?>" class="img-circle img-responsive"> 
                                </div>
                                <div class=" col-md-9"> 
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                            <tr>
                                                <td class="col-md-4">Full Name</td>
                                                <td id="fname"><?php echo $fname; ?></td>
                                            </tr>
                                            <?php if ($friend_type !== "Doctor") { ?>
                                                <tr>
                                                    <td>Name With Initials</td>
                                                    <td id="surname"><?php echo $surname; ?> </td>
                                                </tr>
                                            <?php } else { ?>
                                                <tr>
                                                    <td>Specialty</td>
                                                    <td id="specialty"><?php echo $surname; ?> </td>
                                                </tr>
                                            <?php } ?>
                                            <tr>
                                                <td>Address</td>
                                                <td id="address"><?php echo $address; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>Gender</td>
                                                <td id="gender"><?php echo $gender; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td id="email"><?php echo $email; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>téléphone Number</td>
                                                <td id="téléphone"><?php echo $téléphone; ?> </td>
                                            </tr>
                                            <?php if ($friend_type === "Student") { ?>
                                                <tr>
                                                    <td>Guardians Name</td>
                                                    <td id="g_name"><?php echo $g_name; ?> </td>
                                                </tr>
                                                <tr>
                                                    <td>Guardians Address</td>
                                                    <td id="g_address"><?php echo $g_address; ?> </td>
                                                </tr>
                                                <tr>
                                                    <td>Guardians Email</td>
                                                    <td id="g_email"><?php echo $g_email; ?> </td>
                                                </tr>
                                                <tr>
                                                    <td>Guardians téléphone</td>
                                                    <td id="g_téléphone"><?php echo $g_téléphone; ?> </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
