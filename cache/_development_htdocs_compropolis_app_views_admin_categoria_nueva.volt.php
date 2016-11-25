<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Administración de portal Compropolis</title>

		<meta name="description" content="Administración de portal Compropolis" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
                <?= $this->tag->stylesheetLink('public/assets/css/bootstrap.css') ?>                
                <?= $this->tag->stylesheetLink('public/components/font-awesome/css/font-awesome.css') ?>


		<!-- page specific plugin styles -->
                <?= $this->tag->stylesheetLink('public/components/_mod/jquery-ui.custom/jquery-ui.custom.css') ?>
                <?= $this->tag->stylesheetLink('public/components/jquery.gritter/css/jquery.gritter.css') ?>

		<!-- text fonts -->
                <?= $this->tag->stylesheetLink('public/assets/css/ace-fonts.css') ?>

		<!-- ace styles -->
                <?= $this->tag->stylesheetLink('public/assets/css/ace.css') ?>


		<!--[if lte IE 9]>
                    <?= $this->tag->stylesheetLink('public/assets/css/ace-part2.css') ?>
		<![endif]-->
                <?= $this->tag->stylesheetLink('public/assets/css/ace-skins.css') ?>
                <?= $this->tag->stylesheetLink('public/assets/css/ace-rtl.css') ?>
                

		<!--[if lte IE 9]>
                    <?= $this->tag->stylesheetLink('public/assets/css/ace-ie.css') ?>
		<![endif]-->

		<!-- inline styles related to this page -->
		<style>
			/* some elements used in demo only */
			.spinner-preview {
				width: 100px;
				height: 100px;
				text-align: center;
				margin-top: 60px;
			}
			
			.dropdown-preview {
				margin: 0 5px;
				display: inline-block;
			}
			.dropdown-preview  > .dropdown-menu {
				display: block;
				position: static;
				margin-bottom: 5px;
			}
		</style>

		<!-- ace settings handler -->
                <?= $this->tag->javascriptInclude('public/assets/js/ace-extra.js') ?>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
                    <?= $this->tag->javascriptInclude('public/components/html5shiv/dist/html5shiv.min.js') ?>
                    <?= $this->tag->javascriptInclude('public/components/respond/dest/respond.min.js') ?>
		<![endif]-->
       
            
<style>
    .color{


    }
    #extencion{
        display: none;
    }

</style>

 
        </head>

	<body class="no-skin">
		<!-- #section:basics/navbar.layout -->
                
                <?php 
                $this->url->getBaseUri();
                $this->partial("layouts/admin_navbar", ["id" => 123, "user" => "Admin"] ); ?>
		<!-- /section:basics/navbar.layout -->
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<!-- #section:basics/sidebar -->
                        <?php $this->partial("layouts/admin_sidebar", ["id" => 123, "menu" => "Admin o Proveedor"] ); ?>
			<!-- /section:basics/sidebar -->
			<div class="main-content">
				<div class="main-content-inner">
					<!-- #section:basics/content.breadcrumbs -->
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
                                            
                                            <div class="breadcrumb">
                                                 

<a href="<?= $this->url->get('admin/categoria') ?>" class="btn btn-sm btn-warning">
    <i class="ace-icon fa fa-chevron-left align-top bigger-125"></i>    
    Regresar
</a>

<button id="guardarBtn" class="btn btn-sm btn-success">
    <i class="ace-icon fa fa-floppy-o align-top bigger-125"></i>    
    Guardar
</button>


                                            </div><!-- /.breadcrumb -->
                                            
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<!-- #section:settings.skins -->
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<!-- /section:settings.skins -->

									<!-- #section:settings.navbar -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<!-- /section:settings.navbar -->

									<!-- #section:settings.sidebar -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<!-- /section:settings.sidebar -->

									<!-- #section:settings.breadcrumbs -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<!-- /section:settings.breadcrumbs -->

									<!-- #section:settings.rtl -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<!-- /section:settings.rtl -->

									<!-- #section:settings.container -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>

									<!-- /section:settings.container -->
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<!-- #section:basics/sidebar.options -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>

									<!-- /section:basics/sidebar.options -->
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<!-- /section:settings.box -->
						<div class="page-header">
                                                    <h1>
                                                         Registro de Nueva Categoría 
                                                    </h1>
						</div><!-- /.page-header -->
                                    
                                                <div id="alertMessages">
                                                </div>

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
                                                            

<div class="widget-box">
    <div class="widget-header">
        <h4 class="widget-title">Registro de Nueva Categoria</h4>
    </div>

    <div class="widget-body">
        <div class="widget-main">

                <!-- <legend>Form</legend> -->
            <form id="form" method="POST" class="form-horizontal" role="form">

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Nombre </label>

                    <div class="col-sm-9">
                        <input type="text" id="categoria" name="categoria" placeholder="Captura la Categoría" class="form-control" />
                    </div>
                </div>                                                                                                                

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Categoría Padre </label>

                    <div class="col-sm-9">
                        <div class="widget-box widget-color-blue2">
                            
                            <div class="widget-body">
                                <div class="widget-main padding-8" >
                                        <div id="tree1" class="tree" style="height: 150px;"></div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <input type="text" id="categoriaPadre" name="categoriaPadre" placeholder="" class="form-control" disabled />
                    </div>
                </div>                                                                                                                
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Imagen: </label>
                    <div class="col-sm-9">
                        <input type="text" id="extencion" name="extencion">
                        <!-- <input type="text" id="imagen" name="imagen" placeholder="Adjunta la imagen de la categoría" class="form-control" /> -->
                        <input type="file" id="imagen" name="imagen" placeholder="Adjunta la imagen de la categoría" class="form-control" accept="image/jpg, image/png, image/jpeg" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>




								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<!-- #section:basics/footer -->
					<div class="footer-content">
						<span class="bigger-120">
							Compropolis
							&copy; 2016
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>

					<!-- /section:basics/footer -->
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
                <?= $this->tag->javascriptInclude('public/components/jquery/dist/jquery.js') ?>
		<!-- <![endif]-->

		<!--[if IE]>
                    <?= $this->tag->javascriptInclude('public/components/jquery.1x/dist/jquery.js') ?>                
                <![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?= $this->url->get('public/components/_mod/jquery.mobile.custom/jquery.mobile.custom.js') ?>'>"+"<"+"/script>");
		</script>
                <?= $this->tag->javascriptInclude('public/components/bootstrap/dist/js/bootstrap.js') ?>

		<!-- page specific plugin scripts -->
                     

                <?= $this->tag->javascriptInclude('public/components/_mod/fuelux/tree.js') ?>


<script>

    var datos_arbol;

    //Reconoce la seleccion y pone el contenido en el input CategoriaPadre
    $('#tree1').on('selected.fu.tree', function (event, data) { 
        dText = data.selected[0].text;
        console.log(data.selected[0].idCategoria);
        if(dText.indexOf("<i" == 0)){
            dtt = dText.split("</i>");
            dText = dtt[dtt.length-1];
        }
        dText = $.trim(dText)
        $("#categoriaPadre").val(data.selected[0].idCategoria);
        console.log(dText);
    });
    
    // INICIALIZACIÓN DE JQUERY    
    jQuery(function($){


        $.ajax({
            url : '<?= $this->url->get('admin/categoria/arbol') ?>',
            data : {},
            type : 'POST',
            dataType : 'json',
            success : function(json) {

                tree_data_2 = json;      
            $('#tree1').ace_tree({
                dataSource: dataSource2,
                loadingHTML:'<div class="tree-loading"><i class="ace-icon fa fa-refresh fa-spin blue"></i></div>',
                'open-icon' : 'ace-icon fa fa-folder-open',
                'close-icon' : 'ace-icon fa fa-folder',
                'itemSelect' : true,
                'folderSelect': true,
                'multiSelect': false,
                'selected-icon' : null,
                'unselected-icon' : null,
                'folder-open-icon' : 'ace-icon tree-plus',
                'folder-close-icon' : 'ace-icon tree-minus'
            });

            },
            error : function(xhr, status) {
                console.log('Disculpe, existió un problema');
            },
            complete : function(xhr, status) {
                console.log('Petición realizada');
            }
        });

    });

    // INICIALIZACIÓN DE BOOTSTRAP
    $(function () {
        $('#guardarBtn').on('click', function () {
            var img_paht=document.getElementById('imagen').value;
            var img=img_paht.split("\\");
            var nombre_img=img[img.length-1].split(".");
            var ext=nombre_img[nombre_img.length-1];
            document.getElementById("extencion").value=ext;
            guardarCategoria();
        });
    });

    function guardarCategoria(){
        //var formulario = document.getElementById('form');
        var datosForm = new FormData();
        var categoria = document.getElementById('categoria').value;
        var categoriaPadre = document.getElementById('categoriaPadre').value;
        var extencion = document.getElementById('extencion').value;
        var imagen = document.getElementById('imagen');
        var file = imagen.files[0];
        datosForm.append("categoria",categoria);
        datosForm.append("categoriaPadre",categoriaPadre);
        datosForm.append("extencion",extencion);
        datosForm.append("imagen",file);
        $.ajax({
            url: '<?= $this->url->get('admin/categoria/salvar') ?>',
            type: "post",
            dataType: "JSON",
            data: datosForm,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {                    
                console.log(data);
                limpiarForm();     
                alert(data.messages);                
                if( data.success == true ){
                    limpiarForm();                        
                    showMessages(data.messages);
                }else{
                    // ERROR
                    showMessages(data.messages);
                }
            },
            error: function (xhr, ajaxOptions, thrownError){
                alert(xhr.status);
                alert(thrownError);
            }
        }).done(function(data){
            if(data.ok){
                console.log("se subio con exito");
            }else {
                console.log(data.msg)
            }
        });
    }

    function limpiarForm(){
        $('#categoria').val("");
        $('#categoriaPadre').val("");
        $('#imagen').val("");
    }

// INFORMACIÒN DEL TREE
    var tree_data_2={};//{"uno":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> uno","type":"item","icon-class":"red"},"cuatro":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> cuatro","type":"item","icon-class":"red"},"cinco":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> cinco","type":"item","icon-class":"red"},"seis":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> seis","type":"item","icon-class":"red"},"df":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> df","type":"item","icon-class":"red"},"nueva final":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> nueva final","type":"item","icon-class":"red"},"asdfasdf":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> asdfasdf","type":"item","icon-class":"red"},"LASDFSDF":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> LASDFSDF","type":"item","icon-class":"red"},"UNO":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> UNO","type":"item","icon-class":"red"},"NUEVO 2":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> NUEVO 2","type":"item","icon-class":"red"},"_":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> _","type":"item","icon-class":"red"},"test":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> test","type":"item","icon-class":"red"},"Intento1":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> Intento1","type":"item","icon-class":"red"},"Primera":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> Primera","type":"item","icon-class":"red"},"Guapa":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> Guapa","type":"item","icon-class":"red"},"Hermosa":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> Hermosa","type":"item","icon-class":"red"},"Abi":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> Abi","type":"item","icon-class":"red"},";)":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> ;)","type":"item","icon-class":"red"},"guapa":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> guapa","type":"item","icon-class":"red"},"Aabigail":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> Aabigail","type":"item","icon-class":"red"},"Categor\u00eda 1":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> Categor\u00eda 1","type":"item","icon-class":"red"},"Categor\u00eda prueba":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> Categor\u00eda prueba","type":"item","icon-class":"red"}}

	tree_data_2X = {
		'pictures' : {text: 'Pictures', type: 'folder', 'icon-class':'red'}	,
		'music' : {text: 'Music', type: 'folder', 'icon-class':'orange'}	,
		'video' : {text: 'Video', type: 'folder', 'icon-class':'blue'}	,
		'documents' : {text: 'Documents', type: 'folder', 'icon-class':'green'}	,
		'backup' : {text: 'Backup', type: 'folder'}	,
		'readme' : {text: '<i class="ace-icon fa fa-file-text grey"></i> ReadMe.txt', type: 'item'},
		'manual' : {text: '<i class="ace-icon fa fa-book blue"></i> Manual.html', type: 'item'}
	}
	tree_data_2X['music']['additionalParameters'] = {
		'children' : [
			{text: '<i class="ace-icon fa fa-music blue"></i> song1.ogg', type: 'item'},
			{text: '<i class="ace-icon fa fa-music blue"></i> song2.ogg', type: 'item'},
			{text: '<i class="ace-icon fa fa-music blue"></i> song3.ogg', type: 'item'},
			{text: '<i class="ace-icon fa fa-music blue"></i> song4.ogg', type: 'item'},
			{text: '<i class="ace-icon fa fa-music blue"></i> song5.ogg', type: 'item'}
		]
	}
	tree_data_2X['video']['additionalParameters'] = {
		'children' : [
			{text: '<i class="ace-icon fa fa-film blue"></i> movie1.avi', type: 'item'},
			{text: '<i class="ace-icon fa fa-film blue"></i> movie2.avi', type: 'item'},
			{text: '<i class="ace-icon fa fa-film blue"></i> movie3.avi', type: 'item'},
			{text: '<i class="ace-icon fa fa-film blue"></i> movie4.avi', type: 'item'},
			{text: '<i class="ace-icon fa fa-film blue"></i> movie5.avi', type: 'item'}
		]
	}
	tree_data_2X['pictures']['additionalParameters'] = {
		'children' : {
			'wallpapers' : {text: 'Wallpapers', type: 'folder', 'icon-class':'pink'},
			'camera' : {text: 'Camera', type: 'folder', 'icon-class':'pink'}
		}
	}
	tree_data_2X['pictures']['additionalParameters']['children']['wallpapers']['additionalParameters'] = {
		'children' : [
			{text: '<i class="ace-icon fa fa-picture-o green"></i> wallpaper1.jpg', type: 'item'},
			{text: '<i class="ace-icon fa fa-picture-o green"></i> wallpaper2.jpg', type: 'item'},
			{text: '<i class="ace-icon fa fa-picture-o green"></i> wallpaper3.jpg', type: 'item'},
			{text: '<i class="ace-icon fa fa-picture-o green"></i> wallpaper4.jpg', type: 'item'}
		]
	}
	tree_data_2X['pictures']['additionalParameters']['children']['camera']['additionalParameters'] = {
		'children' : [
			{text: '<i class="ace-icon fa fa-picture-o green"></i> photo1.jpg', type: 'item'},
			{text: '<i class="ace-icon fa fa-picture-o green"></i> photo2.jpg', type: 'item'},
			{text: '<i class="ace-icon fa fa-picture-o green"></i> photo3.jpg', type: 'item'},
			{text: '<i class="ace-icon fa fa-picture-o green"></i> photo4.jpg', type: 'item'},
			{text: '<i class="ace-icon fa fa-picture-o green"></i> photo5.jpg', type: 'item'},
			{text: '<i class="ace-icon fa fa-picture-o green"></i> photo6.jpg', type: 'item'}
		]
	}

	tree_data_2X['documents']['additionalParameters'] = {
		'children' : [
			{text: '<i class="ace-icon fa fa-file-text red"></i> document1.pdf', type: 'item'},
			{text: '<i class="ace-icon fa fa-file-text grey"></i> document2.doc', type: 'item'},
			{text: '<i class="ace-icon fa fa-file-text grey"></i> document3.doc', type: 'item'},
			{text: '<i class="ace-icon fa fa-file-text red"></i> document4.pdf', type: 'item'},
			{text: '<i class="ace-icon fa fa-file-text grey"></i> document5.doc', type: 'item'}
		]
	}

	tree_data_2X['backup']['additionalParameters'] = {
		'children' : [
			{text: '<i class="ace-icon fa fa-archive brown"></i> backup1.zip', type: 'item'},
			{text: '<i class="ace-icon fa fa-archive brown"></i> backup2.zip', type: 'item'},
			{text: '<i class="ace-icon fa fa-archive brown"></i> backup3.zip', type: 'item'},
			{text: '<i class="ace-icon fa fa-archive brown"></i> backup4.zip', type: 'item'}
		]
	}
	var dataSource2 = function(options, callback){
       var $data = null;
        if(!("text" in options) && !("type" in options)){
            $data = tree_data_2;//the root tree
            callback({ data: $data });
            return;
        }
        else if("type" in options && options.type == "folder") {
            if("additionalParameters" in options && "children" in options.additionalParameters)
                $data = options.additionalParameters.children || {};
            else $data = {}//no data
        }
        
        if($data != null)//this setTimeout is only for mimicking some random delay
            setTimeout(function(){callback({ data: $data });} , parseInt(Math.random() * 500) + 200);
        //we have used static data here
        //but you can retrieve your data dynamically from a server using ajax call
        //checkout examples/treeview.html and examples/treeview.js for more info
    }
</script>



		<!--[if lte IE 8]>
                    <?= $this->tag->javascriptInclude('public/components/ExplorerCanvas/excanvas.js') ?>
		  <script src="../"></script>
		<![endif]-->
                <?= $this->tag->javascriptInclude('public/components/_mod/jquery-ui.custom/jquery-ui.custom.js') ?>
                <?= $this->tag->javascriptInclude('public/components/jqueryui-touch-punch/jquery.ui.touch-punch.js') ?>
                <?= $this->tag->javascriptInclude('public/components/bootbox.js/bootbox.js') ?>
                <?= $this->tag->javascriptInclude('public/components/_mod/easypiechart/jquery.easypiechart.js') ?>
                <?= $this->tag->javascriptInclude('public/components/jquery.gritter/js/jquery.gritter.js') ?>
                <?= $this->tag->javascriptInclude('public/components/spin.js/spin.js') ?>
                
		<!-- ace scripts -->
                <?= $this->tag->javascriptInclude('public/assets/js/src/elements.scroller.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/elements.colorpicker.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/elements.fileinput.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/elements.typeahead.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/elements.wysiwyg.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/elements.spinner.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/elements.treeview.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/elements.wizard.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/elements.aside.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.basics.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.scrolltop.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.ajax-content.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.touch-drag.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.sidebar.js') ?>
                
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.sidebar-scroll-1.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.submenu-hover.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.widget-box.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.settings.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.settings-rtl.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.settings-skin.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.widget-on-reload.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.searchbox-autocomplete.js') ?>
                



		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {

                        

			
			})
                        
                        function _addMessages(message , type){
                            htmlMessage =  ' <div id="successMessages" class="hide alert '+type+'"> '+
                                    ' <button type="button" class="close" data-dismiss="alert"> '+
                                    '        <i class="ace-icon fa fa-times"></i> '+
                                    ' </button> '+
                                    '  '+ message + '  '+
                                    ' <br> '+
                                    ' </div>';


                            $('#alertMessages').append( htmlMessage );
                            $('#alertMessages div:last-child').removeClass("hide").fadeOut( 0 ).fadeIn( 400 ).delay( 2000 ).slideUp( 1000 );
                        }
                        
                        function showSuccessMessages(message){
                            _addMessages(message,"alert-success");

                        }
                        function showErrorMessages(message){
                            _addMessages("<b>Ocurrio un error al realizar esta operación:</b> <br>" + message,"alert-danger");
                        }
                        function showNoticeMessages(message){
                            _addMessages(message,"alert-info");
                        }
                        function showWarningMessages(message){
                            _addMessages(message,"alert-warning");
                        }
                        
                        function showMessages(messages){

                            if(messages.errors != undefined) {
                                showErrorMessages(messages.errors.join("<br>"));
                            }                            
                            if(messages.success != undefined) {
                                showSuccessMessages(messages.success);
                            }
                            if(messages.notices != undefined) {
                                showNoticeMessages(messages.notices);
                            }
                            if(messages.warnings != undefined) {
                                showWarningMessages(messages.warnings);
                            }
                            
                        }
		</script>
		<!-- the following scripts are used in demo only for onpage help and you don't need them -->
		
	</body>
</html>
