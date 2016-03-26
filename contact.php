<!DOCTYPE html>
<?php
include("inc/header.php");
?>
        <form method= "post" action="form.php">
            <section>
                <div>
                    <h1>If you are interested in a copy of the book please fill out the fields below I will be in contact with you.</h1>
                </div>
                <form>
                    <div class="row">
                        <div class="large-12 columns">
                            <label id="hl">Name
                                <input type="text" class="entryField" placeholder="please enter your name" name="name"/>
                            </label>

                        </div>
                    </div>
                    <div class="row">
                        <div class="large-12 columns">
                            <label id="hl">Email Address
                                <input type="text" class="entryField" placeholder="please enter your email address" name="email"/>
                            </label>

                        </div>
                    </div>
                    <div class="row">
                        <div class="columns">
                            <label id="hl">Phone Number
                                <input type="text" class="entryField" placeholder="phone number" name="phone"/>
                            </label>

                        </div>
                    </div>
                    <div class="row">
                        <div class="columns">
                            <label id="hl">Questions or Comments
                                <textarea type="text" class="entryField" placeholder="comments" name="comment"/></textarea>
                            </label>

                        </div>
                    </div>
                    <div class="row">
                        <div class="columns">
                            <label id="h1">
                                <input type="submit" value="Submit" />
                            </label>
                        </div>
                    </div>
                </form>
            </section>
<?php
include("inc/footer.php");
?>

