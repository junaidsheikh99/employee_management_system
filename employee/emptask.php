<!DOCTYPE html>
<html>
  <head>
    <!-- <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3.css"> -->
    <style>
      .card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    border: 1px solid rgba(0, 0, 0, .05);
    border-radius: .375rem;
    background-color: #fff;
    background-clip: border-box;
}

.card-header {
    margin-bottom: 0;
    padding: 1.25rem 1.5rem;
    border-bottom: 1px solid rgba(0, 0, 0, .05);
    background-color: #fff;
}

.progress {
    font-size: .75rem;
    display: flex;
    overflow: hidden;
    height: 1rem;
    border-radius: .375rem;
    background-color: #e9ecef;
    box-shadow: inset 0 .1rem .1rem rgba(0, 0, 0, .1);
}

.progress-bar {
    display: flex;
    flex-direction: column;
    transition: width .6s ease;
    text-align: center;
    white-space: nowrap;
    color: #000000;
    background-color: #5e72e4;
    justify-content: center;
}

.bg-success {
    background-color: #2dce89 !important;
}

.bg-danger {
    background-color: #f5365c !important;
}

table {
    border-collapse: collapse;
    width: 100%;
  }
  
  td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
  }
  
  td:first-child {
    width: 20%;
  }
  
  td:first-child img {
    display: block;
    max-width: 100%;
    height: auto;
  }
  
  td:first-child,
  td:nth-child(2),
  td:nth-child(3) {
    vertical-align: top;
  }
  
  td:first-child {
    vertical-align: top;
  }
  
  td:first-child {
    rowspan: 5;
  }
  
  
/* Table new code ends here */

/* New table code2 */

table {
    border-collapse: collapse;
    width: 100%;
  }
  
  td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
  }
  
  th {
    background-color: #2C3E50;
    color: white;
    padding: 8px;
    text-align: left;
    border: 1px solid #ddd;
  }
  
  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  
  tr:hover {
    background-color: #D5D8DC;
  }
  
  td:first-child {
    width: 30%;
  }
  
  td:first-child img {
    display: block;
    max-width: 100%;
    height: auto;
  }
  
  td:first-child,
  td:nth-child(2),
  td:nth-child(3) {
    vertical-align: top;
  }
  
  td:first-child {
    vertical-align: top;
  }
  
  td:first-child {
    rowspan: 5;
  }
  

  

/* new table code 2 ends */

/* 000000000001010101110111111111111111111111 */

table {
    border-collapse: separate;
    border-spacing: 0;
    border: 6px solid #ddd;
    border-radius: 10px;
    width: 100%;
  }
  
  td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
  }
  
  th {
    background-color: #2C3E50;
    color: white;
    padding: 8px;
    text-align: left;
    border: 1px solid #ddd;
  }
  
  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  
  tr:hover {
    background-color: #D5D8DC;
  }
  
  td:first-child {
    width: 5%;
  }
  
  td:first-child img {
    display: block;
    max-width: 100%;
    height: auto;
  }
  
  td:first-child,
  td:nth-child(2),
  td:nth-child(3) {
    vertical-align: top;
  }
  
  td:first-child {
    vertical-align: top;
  }
  
  td:first-child {
    rowspan: 5;
  }

.table-responsive {
    display: block;
    overflow-x: auto;
    width: 100%;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
}

.card-header {
    margin-bottom: 0;
    padding: 1.25rem 1.5rem;
    border-bottom: 1px solid rgba(0, 0, 0, .05);
    background-color: #fff;
}

.card-header:first-child {
    border-radius: calc(.375rem - 1px) calc(.375rem - 1px) 0 0;
}

.col,
.col-xl-6 {
    position: absolute;
    width: 100%;
    min-height: 1px;
    padding-right: 1px;
    padding-left: 10px;
    margin-top: 1px;
}

.col {
    
    max-width: 80%;
    flex-basis: 0;
    flex-grow: 1;
    /* margin-bottom: 50px; */
    
}

/* @media (min-width: 1200px) {

    .col-xl-6 {
        max-width: 50%;
        flex: 0 0 50%;
    }
} */
    </style>
  </head>

<body>
<div class="main-content">
      <div class="container mt-7">
        <!-- Table -->
        <h2 class="mb-5"></h2><div class="row">
  
          <div class="col">
            <div class="card shadow">
              <div class="card-header border-0">
                <h3 class="mb-0">Task Assigned To You</h3>
              </div>
              <div class="table-responsive">
                <table class="table align-items-center table-flush">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Sr. No.</th>
                      <th scope="col">Task Name</th>
                      <th scope="col">Completion</th>
                      <th scope="col">Progress</th>
                      <th scope="col">Deadline</th>
                    </tr>
                  </thead>
  
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>Task 1</td>
                          <td>Completed</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"> 100%</div>
                            </div>
                          </td>
                          <td>10-03-2023</td>
                      </tr>
  
                      <tr>
                          <td>2</td>
                          <td>Task 2</td>
                          <td>Pending</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                            </div>
                          </td>
                          <td>31-03-2023</td>
                      </tr>
  
                      <tr>
                          <td>3</td>
                          <td>Task 3</td>
                          <td>Pending</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                            </div>
                          </td>
                          <td>10-04-2023</td>
                      </tr>
  
                      <tr>
                          <td>4</td>
                          <td>Task 4</td>
                          <td>Pending</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                            </div>
                          </td>
                          <td>10-04-2023</td>
                      </tr>
  
                      <tr>
                          <td>5</td>
                          <td>Task 5</td>
                          <td>Pending</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                            </div>
                          </td>
                          <td>10-04-2023</td>
                      </tr>
  
                      <tr>
                          <td>6</td>
                          <td>Task 6</td>
                          <td>Pending</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                            </div>
                          </td>
                          <td>10-04-2023</td>
                      </tr>
  
                      <tr>
                          <td>7</td>
                          <td>Task 7</td>
                          <td>Pending</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                            </div>
                          </td>
                          <td>10-04-2023</td>
                      </tr>
  
                      <tr>
                          <td>8</td>
                          <td>Task 8</td>
                          <td>Pending</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                            </div>
                          </td>
                          <td>10-04-2023</td>
                      </tr>

                      <tr>
                          <td>1</td>
                          <td>Task 1</td>
                          <td>Completed</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"> 100%</div>
                            </div>
                          </td>
                          <td>10-03-2023</td>
                      </tr>

                      <tr>
                          <td>1</td>
                          <td>Task 1</td>
                          <td>Completed</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"> 100%</div>
                            </div>
                          </td>
                          <td>10-03-2023</td>
                      </tr>

                      <tr>
                          <td>1</td>
                          <td>Task 1</td>
                          <td>Completed</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"> 100%</div>
                            </div>
                          </td>
                          <td>10-03-2023</td>
                      </tr>

                      <tr>
                          <td>1</td>
                          <td>Task 1</td>
                          <td>Completed</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"> 100%</div>
                            </div>
                          </td>
                          <td>10-03-2023</td>
                      </tr>

                      <tr>
                          <td>1</td>
                          <td>Task 1</td>
                          <td>Completed</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"> 100%</div>
                            </div>
                          </td>
                          <td>10-03-2023</td>
                      </tr>
                  </tbody>
                 
                </table>
              </div>
              
            </div>
          </div>
        </div>
        
      <!-- </div>
    </div>

    

</body>
</html> -->