<!-- START BREADCRUMB -->
<ul class="breadcrumb push-down-0">
    <li><a href="#">Home</a></li>
    <li><a href="#">Pages</a></li>
    <li class="active">Calendar</li>
</ul>
<!-- END BREADCRUMB -->                                                

<!-- START CONTENT FRAME -->
<div class="content-frame">   

    <!-- START CONTENT FRAME TOP -->
    <div class="content-frame-top">                        
        <div class="page-title">                    
            <h2><span class="fa fa-image"></span> Gallery</h2>
        </div>                                      
        <div class="pull-right">                            
            <button class="btn btn-primary"><span class="fa fa-upload"></span> Upload</button>
            <button class="btn btn-default content-frame-right-toggle"><span class="fa fa-bars"></span></button>
        </div>                         
    </div>

    <!-- START CONTENT FRAME RIGHT -->
    <div class="content-frame-right">                        
        <div class="block push-up-10">
            <form action="upload.php" class="dropzone dropzone-mini"></form>
        </div>                        
        <h4>Groups:</h4>
        <div class="list-group border-bottom push-down-20">
            <a href="#" class="list-group-item active">All <span class="badge badge-primary">12</span></a>
            <a href="#" class="list-group-item">Nature <span class="badge badge-success">7</span></a>
            <a href="#" class="list-group-item">Music <span class="badge badge-danger">3</span></a>
            <a href="#" class="list-group-item">Space <span class="badge badge-info">2</span></a>
            <a href="#" class="list-group-item">Girls <span class="badge badge-warning">3</span></a>
        </div>                                                
    </div>
    <!-- END CONTENT FRAME RIGHT -->

    <!-- START CONTENT FRAME BODY -->
    <div class="content-frame-body content-frame-body-left">

        <div class="pull-left push-up-10">
            <button class="btn btn-primary" id="gallery-toggle-items">Toggle All</button>
        </div>
        <div class="pull-right push-up-10">
            <div class="btn-group">
                <button class="bm-control btn-primary"><span class="fa fa-pencil"></span> Edit</button>
                <button class="mb-control btn-primary" data-box="#edit" ><span class="fa fa-trash-o"></span> Delete</button>
            </div>                            
        </div>

        <div class="gallery" id="links">

            <a class="gallery-item" href="assets/images/gallery/nature-1.jpg" title="Nature Image 1" data-gallery>
                <div class="image">                              
                    <img src="assets/images/gallery/nature-1.jpg" alt="Nature Image 1"/>                                        
                    <ul class="gallery-item-controls">
                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                    </ul>                                                                    
                </div>
                <div class="meta">
                    <strong>Nature image 1</strong>
                    <span>Description</span>
                </div>                                
            </a>

            <a class="gallery-item" href="assets/images/gallery/music-1.jpg" title="Music picture 1" data-gallery>
                <div class="image">
                    <img src="assets/images/gallery/music-1.jpg" alt="Music picture 1"/>    
                    <ul class="gallery-item-controls">
                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                    </ul>                                                                    
                </div>
                <div class="meta">
                    <strong>Music picture 1</strong>
                    <span>Other description</span>
                </div>                                
            </a>                            

            <a class="gallery-item" href="assets/images/gallery/girls-1.jpg" title="Girls Image 1" data-gallery>
                <div class="image">
                    <img src="assets/images/gallery/girls-1.jpg" alt="Girls Image 1"/>                                        
                    <ul class="gallery-item-controls">
                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                    </ul>                                                                    
                </div>
                <div class="meta">
                    <strong>Girls image 1</strong>
                    <span>Description</span>
                </div>                                
            </a>

            <a class="gallery-item" href="assets/images/gallery/nature-2.jpg" title="Nature Image 2" data-gallery>
                <div class="image">
                    <img src="assets/images/gallery/nature-2.jpg" alt="Nature Image 2"/>    
                    <ul class="gallery-item-controls">
                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                    </ul>                                                                    
                </div>
                <div class="meta">
                    <strong>Nature image 2</strong>
                    <span>Description</span>
                </div>                                
            </a>

            <a class="gallery-item" href="assets/images/gallery/space-1.jpg" title="Space picture 1" data-gallery>
                <div class="image">
                    <img src="assets/images/gallery/space-1.jpg" alt="Space picture 1"/>    
                    <ul class="gallery-item-controls">
                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                    </ul>                                                                    
                </div>
                <div class="meta">
                    <strong>Space picture 1</strong>
                    <span>Other description</span>
                </div>                                
            </a>

            <a class="gallery-item" href="assets/images/gallery/music-2.jpg" title="Music picture 2" data-gallery>
                <div class="image">
                    <img src="assets/images/gallery/music-2.jpg" alt="Music picture 2"/>    
                    <ul class="gallery-item-controls">
                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                    </ul>                                                                    
                </div>
                <div class="meta">
                    <strong>Music picture 2</strong>
                    <span>Other description</span>
                </div>                                
            </a>                            

            <a class="gallery-item" href="assets/images/gallery/nature-3.jpg" title="Nature Image 3" data-gallery>
                <div class="image">
                    <img src="assets/images/gallery/nature-3.jpg" alt="Nature Image 3"/>    
                    <ul class="gallery-item-controls">
                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                    </ul>                                                                    
                </div>
                <div class="meta">
                    <strong>Nature image 3</strong>
                    <span>Description</span>
                </div>                                
            </a>                                                     

            <a class="gallery-item" href="assets/images/gallery/girls-2.jpg" title="Girls Image 2" data-gallery>
                <div class="image">
                    <img src="assets/images/gallery/girls-2.jpg" alt="Girls Image 2"/>    
                    <ul class="gallery-item-controls">
                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                    </ul>                                                                    
                </div>
                <div class="meta">
                    <strong>Girls image 2</strong>
                    <span>Description</span>
                </div>                                
            </a>                                                

            <a class="gallery-item" href="assets/images/gallery/space-2.jpg" title="Space picture 2" data-gallery>
                <div class="image">
                    <img src="assets/images/gallery/space-2.jpg" alt="Space picture 2"/>    
                    <ul class="gallery-item-controls">
                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                    </ul>                                                                    
                </div>
                <div class="meta">
                    <strong>Space picture 2</strong>
                    <span>Other description</span>
                </div>                                
            </a>                               

            <a class="gallery-item" href="assets/images/gallery/nature-4.jpg" title="Nature Image 4" data-gallery>
                <div class="image">
                    <img src="assets/images/gallery/nature-4.jpg" alt="Nature Image 4"/>    
                    <ul class="gallery-item-controls">
                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                    </ul>                                                                    
                </div>
                <div class="meta">
                    <strong>Nature image 4</strong>
                    <span>Description</span>
                </div>                                
            </a>                                                                 

            <a class="gallery-item" href="assets/images/gallery/music-3.jpg" title="Music picture 3" data-gallery>
                <div class="image">
                    <img src="assets/images/gallery/music-3.jpg" alt="Music picture 3"/>    
                    <ul class="gallery-item-controls">
                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                    </ul>                                                                    
                </div>
                <div class="meta">
                    <strong>Music picture 3</strong>
                    <span>Other description</span>
                </div>                                
            </a>                            

            <a class="gallery-item" href="assets/images/gallery/nature-5.jpg" title="Nature Image 5" data-gallery>
                <div class="image">
                    <img src="assets/images/gallery/nature-5.jpg" alt="Nature Image 5"/>    
                    <ul class="gallery-item-controls">
                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                    </ul>                                                                    
                </div>
                <div class="meta">
                    <strong>Nature image 5</strong>
                    <span>Description</span>
                </div>                                
            </a>

            <a class="gallery-item" href="assets/images/gallery/nature-6.jpg" title="Nature Image 6" data-gallery>
                <div class="image">
                    <img src="assets/images/gallery/nature-6.jpg" alt="Nature Image 6"/>    
                    <ul class="gallery-item-controls">
                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                    </ul>                                                                    
                </div>
                <div class="meta">
                    <strong>Nature image 6</strong>
                    <span>Description</span>
                </div>                                
            </a>                                                    

            <a class="gallery-item" href="assets/images/gallery/girls-3.jpg" title="Girls Image 3" data-gallery>
                <div class="image">
                    <img src="assets/images/gallery/girls-3.jpg" alt="Girls Image 3"/>    
                    <ul class="gallery-item-controls">
                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                    </ul>                                                                    
                </div>
                <div class="meta">
                    <strong>Girls image 3</strong>
                    <span>Description</span>
                </div>                                
            </a>                                                      

            <a class="gallery-item" href="assets/images/gallery/nature-7.jpg" title="Nature Image 7" data-gallery>
                <div class="image">
                    <img src="assets/images/gallery/nature-7.jpg" alt="Nature Image 7"/>
                    <ul class="gallery-item-controls">
                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                    </ul>                                                                    
                </div>
                <div class="meta">
                    <strong>Nature image 7</strong>
                    <span>Description</span>
                </div>                                
            </a>                                                    

            <a class="gallery-item" href="assets/images/gallery/music-5.jpg" title="Music picture 5" data-gallery>
                <div class="image">
                    <img src="assets/images/gallery/music-5.jpg" alt="Music picture 5"/>    
                    <ul class="gallery-item-controls">
                        <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                        <li><span class="gallery-item-remove"><i class="fa fa-times"></i></span></li>
                    </ul>                                                                    
                </div>
                <div class="meta">
                    <strong>Music picture 5</strong>
                    <span>Other description</span>
                </div>                                
            </a>                            

        </div>

        <ul class="pagination pagination-sm pull-right push-down-20 push-up-20">
            <li class="disabled"><a href="#">«</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>                                    
            <li><a href="#">»</a></li>
        </ul>
    </div>       
    <!-- END CONTENT FRAME BODY -->
</div>               
<!-- END CONTENT FRAME -->

</div><!--END MESSAGE BOX-->
<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="edit">
  <div class="mb-container">
    <div class="mb-middle">
      <div class="mb-title"><span class="glyphicon glyphicon-pencil"></span><strong>Edit</strong> ?</div>
      <div class="mb-content">
        <p>Are you sure want to Edit this post?</p>                    
        <p>Press "No" if youwant to continue work. Press Yes to continue Edit this post.</p>
    </div>
    <div class="mb-footer">
        <div class="pull-right">
          <a href="#" class="btn btn-success btn-lg">Yes</a>
          <button class="btn btn-default btn-lg mb-control-close">No</button>
      </div>
  </div>
</div>
</div>