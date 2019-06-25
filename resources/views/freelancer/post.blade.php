@extends('layouts.freelay')
@section('content')
    <div class="col-lg-9 column">
        <div class="padding-left">					 								 		
            <div class="border-title"><h3>Send Message</h3></div>
            <form method="post" action="/upost"  enctype="multipart/form-data">
            @csrf
            <input type="tet"  value="{{Auth::user()->id}}" name="fid" hidden >
                <div class="resumeadd-form">
                    <div class="col-lg-3">
                        <div class="upload-portfolio">
                            <div class="uploadbox">
                                <img id="uploadbox">
                                <label for="file-upload" class="custom-file-upload">
                                    <i class="la la-cloud-upload"></i> <span>Upload Image</span>
                                </label>
                                <input id="file-upload" type="file" style="display: none;"  name="image" id="file"  onchange="show(this)" />
                            					
												<script>
													function show(input) {
														debugger;
														var validExtensions = ['jpg','png','jpeg']; //array of valid extensions
														var fileName = input.files[0].name;
														var fileNameExt = fileName.substr(fileName.lastIndexOf('.') + 1);
														if ($.inArray(fileNameExt, validExtensions) == -1) {
															input.type = ''
															input.type = 'file'
															$('#').attr('src',"");
															alert("Only these file types are accepted : "+validExtensions.join(', '));
														}
														else
														{
														if (input.files && input.files[0]) {
															var filerdr = new FileReader();
															filerdr.onload = function (e) {
																$('#uploadbox').attr('src', e.target.result);
															}
															filerdr.readAsDataURL(input.files[0]);
														}
														}
													}
												</script>
                            </div>                                               
                            <div class="pf-field">
                                <input type="text" placeholder="Write About Your Previous Works or Something" name="comments" class="textq"/>
                            </div>
                             <div class="uploadbutton">
                                <button type="submit">Post</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>

@endsection
