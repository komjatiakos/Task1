<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-body">
                    <form method="post" action="./../PHP/adding.php">
                        <div class="container">
                            <h2>ADD CAR FORM</h2>
                            <div class="form-group">
                                <label for="owner">Owner:</label>
                                <div class="col-sm-10">  
                                <input type="text" class="form-control" id="owner" placeholder="Owner's name (50)" name="owner" pattern=".{,50}" required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="which_car">Which car:</label>
                                <div class="col-sm-10">  
                                    <select class="form-control" id="which_car" name="which_car" required="true">
                                        <option disabled="disabled" selected="true" value=""> ~~~ CHOOSE ONE ~~~ </option>
                                        <option  value="">first car "read from the db"</option>
                                        <option value="">second car "read from the db"</option>
                                        <option value="">third car "read from the db"</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="warranty">Has warranty?</label>
                                <div class="col-sm-10">  
                                <input type="checkbox" class="form-control" id="warranty" name="warranty">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="age">Age?</label>
                                <div class="col-sm-10">  
                                    <input  type="radio" id="age1" name="age" value="0-5" required="true">
                                    <label class="control-label col-sm-10" for="age1">0-5</label><br>
                                    <input type="radio" id="age2" name="age" value="5-10">
                                    <label class="control-label col-sm-10" for="age2">5-10</label><br>
                                    <input type="radio" id="age3" name="age" value="10+">
                                    <label class="control-label col-sm-10" for="age3">10+</label><br><br>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-7" for="started">Service start:</label>
                                <div class="col-sm-10">          
                                    <input type="date" class="form-control" id="started" name="started" required="true" >
                                </div>
                            </div>
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary btn-user btn-block" name="savedata">Save</button>
                                <button class="btn btn-secondary btn-user btn-block" type="button" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>