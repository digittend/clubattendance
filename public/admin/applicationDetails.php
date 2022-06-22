<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    </head>
    <body>
        <?php
            include("../../header/header.php");
        ?>
        <!--Nanti kena automatically tarik from database untuk application name, club name, date, time and proposal-->
          <div class="container px-5 my-5">
              <h1 class="pb-4">Club Application Details</h1>
              <form id="contactForm" action="#" method="post">
                  <div class="form-floating mb-3">
                      <input class="form-control" name="appName" type="text" placeholder="Application Name" required/>
                      <label for="applicationName">Application Name</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input class="form-control" name="clubName" type="text" placeholder="Club Name" required/>
                    <label for="ClubName">Club Name</label>
                </div>
                  <div class="form-floating mb-3">
                      <input class="form-control" name="startDate" type="date" placeholder="Start Date" required/>
                      <label for="startDate">Start Date</label>
                  </div>
                  <div class="form-floating mb-3">
                      <input class="form-control" name="endDate" type="date" placeholder="End Date" required/>
                      <label for="endDate">End Date</label>
                  </div>
                  <div class="form-floating mb-3">
                      <input class="form-control" name="time" type="time" placeholder="Time" required/>
                      <label for="time">Time</label>
                  </div>
                  <div class="form-floating mb-3">
                      <input class="form-control" name="proposalUrl" type="url" placeholder="Proposal Files Link" required/>
                      <label for="proposalFilesLink">Proposal Files Link</label>
                  </div>
                  <div class="form-floating mb-3">
                    <select class="form-select" name="appStatus" id="status" aria-label="appStat" required>
                        <option value="0">Accepted</option>
                        <option value="1">Rejected</option>
                    </select>
                    <label for="appStatus">Status</label>
                </div>
                <div class="form-floating mb-3">
                  <input class="form-control" name="remarks" type="comment" placeholder="remarks" required/>
                  <label for="remarks">Remarks</label>
              </div>
              <!--Aku try nak buat macam bila tekan accepted baru keluar list officer tapi tak jadi-->
              <script>
                var s = document.getElementById('status');
                var status = s.options[s.selectedIndex].value;
               if(status == '0'){
                $("assignoff").show();
              }
               </script>
                 <div class="form-floating mb-3">
                    <select class="form-select" name="assignOfficer" id="assignoff" aria-label="assoff" required>
                        <option value="0">Officer 1-Encik Nuh Hakimi Mohd Yassin</option>
                        <option value="1">Officer 2- Puan Mariya Mohamad</option>
                        <option value="2">Officer 3- Encik Fuad Ibrahim</option>
                    </select>
                    <label for="assignOfficer">Assign Officer</label>
                </div>
              
                
                  <div class="d-grid">
                      <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
                  </div>

              </form>
          </div>
</html>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    </body>
</html>