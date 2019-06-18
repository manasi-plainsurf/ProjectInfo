                   

<form action=".//pro.php" method="POST" enctype='multipart/form-data'>    
                    <div class="row">
                        <div class="fields-grid col-lg-6">
                            <div class="styled-input ">
                                <input type="text" name="Projectname" required=""> 
                                <label> Project Name</label> 
                            </div> 


                            <div class="styled-input">
                                <input type="text" name="TeamName" required="">
                                <label>Team Name</label>
                                <span></span>
                            </div>
                        </div>

                        <div class="fields-grid col-lg-6">
                            <div class="styled-input agile-styled-input-top">
                                <input type="text" name="TeamSize" required=""> 
                                <label>Team Size</label>
                            </div> 

                            <div class="styled-input">
                                <input type="date" name="StartDate" required="">
                                <label>Start Date</label>
                                <span></span>
                            </div>

                        </div>
                        
                         <div class="fields-grid col-lg-6">
                            <div class="styled-input agile-styled-input-top">
                                <input type="date" name="EndDate" required=""> 
                                <label>EndDate</label>
                            </div> 

                            <div class="styled-input">
                                <input type="text" name="Status" required="">
                                <label>Status</label>
                                <span></span>
                            </div>

                        </div>
                        
                        <input type="submit" name="submit" value="Submit">
                        
                        
                        <div class="styled-input">
                            
                            <a href=".//infolog.php">Login</a>
                      
                           <!-- <input type="button" onclick="window.location.href=".//<a href="infolog.php"></a> > -->
                            
                        </div>
                         
                    </div> 
</form>