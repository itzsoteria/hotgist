<?php
include_once 'account_header.php';
?>
            <div class="dashboard-content">
                <div class="row">
                    <!-- Listings -->
                    <div class="col-lg-12 col-sm-12">
                        <div id="add-listing">
                        <form action="upload_post.php" method="post" enctype="multipart/form-data">
                            <!-- Section -->
                            <div class="add-listing-section">

                                <!-- Headline -->
                                <div class="add-listing-headline">
                                    <h3><i class="sl sl-icon-doc"></i> Basic Informations</h3>
                                </div>
                                    
                                <!-- Title -->
                                <div class="row with-forms">
                                    <div class="col-md-12">
                                        <label>Title</label>
                                        <input class="search-field" type="text" name="title"/>
                                    </div>
                                </div>

                                <!-- Row -->
                                <div class="row with-forms">

                                    <!-- Status -->
                                    <div class="col-md-6">
                                        <label>Category</label>
                                        <select class="chosen-select-no-single" name="categories" >
                                            <option value="blank">Select Category</option>  
                                            <option value="Eat $ Drink">Eat & Drink</option>
                                            <option value="Shops">Shops</option>
                                            <option value="Hotels">Hotels</option>
                                            <option value="Restaurants">Restaurants</option>
                                            <option value="Fitness">Fitness</option>
                                            <option value="Events">Events</option>
                                        </select>
                                    </div>

                                    <!-- Type -->
                                    <div class="col-md-6">
                                        <label>Image</label>
                                        <input type="file" name="image" accept="image/*">
                                    </div>

                                    <div class="form">
                                    <label>Description</label>
                                    <textarea class="WYSIWYG" name="content" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
                                </div>

                                </div>
                                <!-- Row / End -->
                            </div>
                           <button class="button">Save</button>
                           </form>
                        </div>
                    </div>
                </div>      
            </div>

            <!-- Content / End -->
            <?php
include_once 'account_footer.php';
?>