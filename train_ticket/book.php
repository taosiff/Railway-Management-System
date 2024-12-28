<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:sindex.php");
}
include 'header.php';
?>

<style>
    .container {
        border-spacing: 10px;
        font-family: Montserrat, sans-serif;
        font-size: 18px !important;
        border: 1px solid black;
        margin-top: 30px;
        margin-bottom: 50px;
        padding-top: 50px;
        padding-right: 50px;
        padding-bottom: 50px;
        padding-left: 150px;
        align-content: center;
    }
    .button {
        padding: 15px 32px;
        align-content: left;
        color: white;
        background-color: black;
    }
    #number {
        overflow: hidden;
        width: 600px;
    }
    input[type=number] {
        width: 250px;
    }
    input[type=date] {
        width: 250px;
    }
</style>

</head>
<body>
<div class="mt-4"></div>
<h1><center>Book Ticket</center></h1>
<form method='post' action='book_action.php' align='center'>

    <div class="container">
        <section id="form" class="formborder">
            <div class="container2">
                <form>
                    <div class="form-row row justify-content-around" name="source">
                        &nbsp
                        <center>
                        <div class="form-group col-md-5" name="source">
                            <label for="inputEmail4">SOURCE STATION :</label>
                            <select id="inputState" class="form-control" name="source">
                                <option>Dhaka</option>
                                <option>Gazipur</option>
                                <option>Narayanganj</option>
                                <option>Tangail</option>
                                <option>Mymensingh</option>
                                <option>Brahmanbaria</option>
                                <option>Chattogram</option>
                                <option>Sylhet</option>
                                <option>Cumilla</option>
                                <option>Jamalpur</option>
                                <option>Rajshahi</option>
                                <option>Khulna</option>
                                <option>Barisal</option>
                                <option>Rangpur</option>
                            </select>
                        </div>
                        </center>
                        <center>

                          <div class="form-group col-md-5" name="dest">
                              <label for="inputPassword4">FINAL DESTINATION :</label>
                              <select id="inputState" class="form-control" name="dest">
                                  <option>Dhaka</option>
                                  <option>Gazipur</option>
                                  <option>Narayanganj</option>
                                  <option>Tangail</option>
                                  <option>Mymensingh</option>
                                  <option>Brahmanbaria</option>
                                  <option>Chattogram</option>
                                  <option>Sylhet</option>
                                  <option>Cumilla</option>
                                  <option>Jamalpur</option>
                                  <option>Rajshahi</option>
                                  <option>Khulna</option>
                                  <option>Barisal</option>
                                  <option>Rangpur</option>
                              </select>
                          </div>
                        </center>
                        
                        <center>
                            <div class="form-group col-md-5" name="class">
                                <label for="inputPassword4">Train Class :</label>
                                <select id="inputState" class="form-control" name="class">
                                    <option>First</option>
                                    <option>Second</option>
                                    <option>AC</option>
                                </select>
                            </div>
                        </center>

                        <center>
                            <div class="form-group col-md-5" name="type">
                                <label for="inputState">JOURNEY TYPE :</label>
                                <select id="inputState" class="form-control" name="type">
                                    <option>Single</option>
                                    <option>Return</option>
                                </select>
                            </div>
                        </center>

                        <center>
                            <div class="form-group col-md-5" name="booking date">
                                <label for="inputState">DATE OF JOURNEY :</label>
                                <input type="date" id="booking date" class="form-control" name="book_date" required>
                            </div>
                        </center>
                        
                        <br>
                        <center>
                        <div class="form-row row justify-content-aroundd">
                            <div class="form-group col-md-16">
                                <center><label for="inputState"><h8>NO OF PASSENGERS :</h8></label></center>
                                <center><input type="number" name="number" required min="1" max="5"></center>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary mt-5" name="login_submit">Proceed</button>
                            </div>
                        </div>
                        </center>
                    </div>
                </form>
            </div>
        </section>
    </div>

<?php include 'footer.php'; ?>

</body>
</html>
