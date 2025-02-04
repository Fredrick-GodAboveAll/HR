


<!-- Projects left bar  -->

<!-- ========== L E F T S I D E B A R =========  -->


<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="index.html"><img src="../../assets/images/logo.svg" width="25" alt="fredrick"><span class="m-l-10">FHRS</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="../../assets/images/lg/avatar3.jpg" alt="User"></a>
                    <div class="detail">
                        <h4>fredrick</h4>
                        <small>Super Admin</small>                        
                    </div>
                </div>
            </li>

            <!-- page dashboard  -->
            <li class="<?php if($page=='dashboard') {echo 'active open';} ?>">
                <a href="../admin/dashboard.inc.php"><i class="ti ti-home"></i><span>Dashboard</span></a>
            </li>

            <li class="<?php if($page=='add_emp') {echo 'active open';} ?>"><a href="javascript:void(0);" class="menu-toggle">
                <i class="zmdi zmdi-account-o"></i><span>Employees</span></a>
                <ul class="ml-menu">
                    <li class="<?php if($page=='add_emp') {echo 'active';} ?>"><a href="../admin/view_employees.inc.php">View Employees</a></li>
                    <li class="<?php if($page=='add_emp') {echo 'active';} ?>"><a href="../admin/add_employee.inc.php">Add Employees</a></li>

                    <li><a href="chat.html">Manage Contracts</a></li>
                    <li><a href="contact.html">Payroll Data</a></li>                    
                    <li><a href="contact.html">Employee Data</a></li>                    
                    <li><a href="contact.html">Employee Documents <span class="badge badge-info">new</span> </a></li>                    
                    <li><a href="contact.html">Employee Messaging <span class="badge badge-info">new</span></a></li>                    
                    <li><a href="contact.html">Work Shifts</a></li>                    
                    <li><a href="contact.html">Terminate Employment</a></li>                    
                </ul>
            </li>

            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-money-off"></i><span>Process Pay</span></a>
                <ul class="ml-menu">

                    <li><a href="mail-inbox.html">Advance Pay</a></li>
                    <li><a href="events.html">Consultants</a></li>
                    <li><a href="events.html">Casual Employees</a></li>
                    <li><a href="chat.html">Losses/Damage</a></li>
                    <li><a href="events.html">Expense Claims</a></li>

                </ul>
                

              
            </li>

            <li>
                <a href="javascript:void(0);" class="menu-toggle"><i class="ti ti-reload"></i><span>Regular Employees</span></a>
                <ul class="ml-menu">
                    <li><a href="events.html">Process Payroll</a></li>
                    <li><a href="chat.html">View Pay Slips</a></li>
                    <li><a href="chat.html">Email Pay Slips</a></li>
                    <li><a href="chat.html">Scheduled Pay Slips</a></li>
                    <li><a href="chat.html">Print Pay Slips</a></li>
                </ul>
            
            </li>  

            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-airplane"></i><span>Leave</span></a>
                <ul class="ml-menu">
                    <li><a href="mail-inbox.html">View Applications</a></li>
                    <li><a href="chat.html">Apply for Leave</a></li>
                    <li><a href="events.html">Leave Entitlement</a></li>
                    <li><a href="contact.html">Leave Logs</a></li>                    
                    <li><a href="contact.html">Leave Balances</a></li>                    
                    <li><a href="contact.html">Leave Categories</a></li>                    
                </ul>
            </li>

            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-calendar-alt"></i><span>Attendance</span></a>
                <ul class="ml-menu">
                    <li><a href="mail-inbox.html">Clock in Devices</a></li>
                    <li><a href="chat.html">Enroll Employees</a></li>
                    <li><a href="events.html">Attendance Logs</a></li>
                    <li><a href="contact.html">Overtime</a></li>                 
                    <li><a href="contact.html">Absenteeism</a></li>                 
                    <li><a href="contact.html">Manual Scheduler <span class="badge badge-info">new</span></a> </li>                 
                    <li><a href="contact.html">Timesheets <span class="badge badge-info">new</span></a> </li>                 
                </ul>
            </li>

            

            <li><a href="javascript:void(0);" class="menu-toggle"><i class="ti ti-layers"></i><span>Reports</span></a>
                <ul class="ml-menu">
                    <li><a href="mail-inbox.html">Payroll Reports</a></li>
                    <li><a href="chat.html">Payment Reports</a></li>
                    <li><a href="events.html">Statutory Reports</a></li>
                    <li><a href="contact.html">Attendance Reports</a></li> 
                    <li><a href="contact.html">Timesheet Reports <span class="badge badge-info">new</span></a></li> 
                    <li><a href="contact.html">Leave Reports</a></li> 
                    <li><a href="contact.html">Audit Log</a></li> 

                </ul>
            </li>

            <li class="<?php if($page=='hrm_settings') {echo 'active open';} ?>" > 
                <a href="javascript:void(0);" class="menu-toggle"><i class="ti ti-panel"></i><span>Settings</span></a>
                <ul class="ml-menu">
                    <li class="<?php if($page=='hrm_settings') {echo 'active';} ?>" ><a href="../admin/hrm_settings.inc.php">Hrm Settings</a></li>
                    <li><a href="mail-inbox.html">Payroll Settings</a></li>
                    <li><a href="mail-inbox.html">Expense Claims Settings</a></li>
                    <li><a href="mail-inbox.html">General HR</a></li>
                    <li><a href="mail-inbox.html">My Companies</a></li>
                    <li><a href="mail-inbox.html">Look & Fee</a></li>
                    <li><a href="mail-inbox.html">Users</a></li>
                    <li><a href="mail-inbox.html">Taxes</a></li>
                    <li><a href="mail-inbox.html">System Settings</a></li>
                    <li><a href="mail-inbox.html">API Settings <span class="badge badge-danger">dev</span></a></li>

                </ul>
            </li>

            <li>
                <div class="progress-container progress-primary m-t-10">
                    <span class="progress-badge">Traffic this Month</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;">
                            <span class="progress-value">67%</span>
                        </div>
                    </div>
                </div>
                <div class="progress-container progress-info">
                    <span class="progress-badge">Server Load</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                            <span class="progress-value">86%</span>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</aside>