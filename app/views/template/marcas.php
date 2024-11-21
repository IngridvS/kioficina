<section class="logo_client">
    <article class="site">
        <h4>Marcas Confiável</h4>
        <div class="logo">

            <div class="clientes">

                <?php foreach($marcas as $marca):?>

                <div class="item"><a href="">
                    <img src="<?php
                            $caminhoArquivo = $_SERVER['DOCUMENT_ROOT'] . "/kioficina/public/uploads/" . $marca['logo_marca'];
                            if ($marca['logo_marca'] != ""){
                                if (file_exists($caminhoArquivo)){
                                    echo "http://localhost/kioficina/public/uploads/" . htmlspecialchars($marca['logo_marca'], ENT_QUOTES, 'UTF-8');
                                }else{
                                
                                 echo("http://localhost/kioficina/public/uploads/logo/sem_foto.png");

                                }

                            }else{
                                echo("http://localhost/kioficina/public/uploads/logo/sem_foto.png");

                            }
                            ?>" alt=<?php echo htmlspecialchars($marca['alt_marca'], ENT_QUOTES, 'UTF-8'); ?>></a>
                </div>


                


                <!-- 
                <div class="item"><a href=""><svg fill="yellow" width="80px" height="70px" viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.905 9.784H15.92V8.246a.157.157 0 0 0-.157-.158H8.238a.157.157 0 0 0-.157.158v1.538H2.358c-.087 0-.193.07-.237.158L.02 14.058c-.045.088-.011.157.077.157H8.08v1.54c0 .086.07.157.157.157h7.525c.087 0 .157-.07.157-.157v-1.54h5.723c.087 0 .193-.07.238-.157l2.1-4.116c.045-.087.011-.158-.076-.158m-2.494.996-1.244 2.437h-5.232v1.708H9.07v-1.708H2.595L3.84 10.78h5.232V9.073h5.864v1.707z" />
                        </svg></a>
                </div>




                <div class="item"><a href=""><svg fill="yellow" width="80px" height="70px" viewBox="0 0 192.756 192.756" xmlns="http://www.w3.org/2000/svg">

                            <g clip-rule="evenodd">



                                <path d="M24.037 110.41c-2.514-1.575-4.367-7.01-4.367-13.469 0-.237.001-.471.007-.704l.002.003c-6.994-1.099-12.047-4.11-12.177-7.672l-.02.042c-1.711 2.127-2.688 4.586-2.688 7.206 0 7.71 8.463 14.027 19.198 14.586l.045.008zM1.56 96.378c0-8.626 10.736-15.621 23.979-15.621 13.244 0 23.98 6.995 23.98 15.621 0 8.627-10.736 15.622-23.98 15.622-13.243 0-23.979-6.995-23.979-15.622zm23.98-13.367c2.557 0 4.732 3.879 5.538 9.291l.002-.009c4.975-.774 8.457-2.56 8.457-4.639 0-2.789-6.267-5.048-13.997-5.048-7.729 0-13.996 2.259-13.996 5.048 0 2.079 3.482 3.864 8.456 4.639l.003.009c.806-5.412 2.981-9.291 5.537-9.291zm1.548 27.39c10.735-.559 19.199-6.876 19.199-14.586 0-2.62-.978-5.079-2.688-7.206l-.021-.042c-.129 3.562-5.182 6.573-12.177 7.672l.003-.003c.005.233.007.467.007.704 0 6.459-1.854 11.894-4.367 13.469l.044-.008zM25.54 92.703a37.94 37.94 0 0 0 3.325-.142l-.001.001c-.53-3.468-1.818-5.917-3.323-5.917s-2.792 2.449-3.323 5.917l-.001-.001a38.27 38.27 0 0 0 3.323.142zm0 12.846c1.925 0 3.496-4.006 3.579-9.029l.01.003a39.115 39.115 0 0 1-7.177 0l.01-.003c.083 5.023 1.653 9.029 3.578 9.029zM123.922 96.378c0-6.593 5.346-11.939 11.939-11.939 6.596 0 11.941 5.346 11.941 11.939 0 6.595-5.346 11.939-11.941 11.939-6.593 0-11.939-5.344-11.939-11.939zm11.939 7.561c3.682 0 6.668-3.386 6.668-7.562 0-4.175-2.986-7.561-6.668-7.561s-6.666 3.386-6.666 7.561c0 4.177 2.985 7.562 6.666 7.562zM161.35 89.413v18.362h-5.032V89.413h.018-7.035v-4.151h19.066v4.151h-7.017zM174.453 102.71l-.004.005-1.93 5.061h-5.877l9.289-22.514h6.262l9.287 22.514h-5.875l-1.93-5.061-.006-.005H174.453zm4.609-3.8h3.166l-.002.001-3.143-8.24h-.043l-3.143 8.24-.002-.001h3.167zM68.617 89.413v18.362h-5.031V89.413h.018-7.036v-4.151h19.067v4.151h-7.018zM76.922 96.378c0-6.593 5.346-11.939 11.941-11.939 6.594 0 11.94 5.346 11.94 11.939 0 6.595-5.346 11.939-11.94 11.939-6.595 0-11.941-5.344-11.941-11.939zm11.941 7.561c3.681 0 6.667-3.386 6.667-7.562 0-4.175-2.986-7.561-6.667-7.561-3.682 0-6.667 3.386-6.667 7.561 0 4.177 2.985 7.562 6.667 7.562zM112.361 107.775h2.551v-8.548l8.777-13.965h-5.875l-5.453 9.463-5.451-9.463h-5.875l8.776 13.965v8.548h2.55z" fill="yellow" />

                            </g>

                        </svg></a>
                </div>




                <div class="item"><a href=""><svg width="80px" height="70px" viewBox="0 0 192.756 192.756" xmlns="http://www.w3.org/2000/svg">

                            <g clip-rule="evenodd">

                                <path d="M0 0h192.756v192.756H0V0z" />

                                <path d="M33.897 139.551l2.465.26c1.168.131 1.168 1.039 1.168 1.688v2.984H26.111v-2.984c0-.648.13-1.557 1.298-1.688l2.465-.26v-2.465H15.082v2.465l2.466.26c1.038.131 1.167 1.039 1.167 1.688v9.602c0 .65-.129 1.559-1.167 1.688l-2.466.26v2.465h14.793v-2.465l-2.465-.26c-1.168-.129-1.298-1.037-1.298-1.688v-2.854h11.419v2.854c0 .65 0 1.559-1.168 1.688l-2.465.26v2.465H48.69v-2.465l-2.465-.26c-1.038-.129-1.168-1.037-1.168-1.688v-9.602c0-.648.13-1.557 1.168-1.688l2.465-.26v-2.465H33.897v2.465zM132.906 137.086h-18.297v2.465l2.207.26c.777.131 1.297.391 1.297 1.559v9.73c0 .65-.129 1.559-1.297 1.688l-2.467.26v2.465h18.557c6.617 0 12.068-2.594 12.068-9.213.001-6.618-5.451-9.214-12.068-9.214zm-1.297 14.922h-6.229V140.59h6.229c3.633 0 4.801 1.688 4.801 5.709 0 4.023-1.168 5.709-4.801 5.709z" fill="yellow" />

                                <path d="M176.248 152.787c-1.168-.129-1.559-.908-1.947-1.428l-8.564-13.105c-.648-.908-1.039-1.168-1.947-1.168h-14.014v2.465l3.244.391c.52 0 1.168.648.648 1.557l-6.357 10.252c-.26.389-.52.908-1.299 1.037l-2.465.26v2.465h11.809v-2.465l-1.947-.129c-.908-.131-1.428-.779-.908-1.428l.908-1.559h11.42l.779 1.299c.777 1.037-.131 1.557-1.039 1.557l-2.076.26v2.465h16.09v-2.465l-2.335-.261zm-20.893-6.228l3.504-5.58 3.762 5.58h-7.266zM101.244 139.551l2.596.26c1.037.131 1.168 1.039 1.168 1.688v9.213l-9.733-12.846c-.519-.65-.908-.779-1.946-.779H80.612v2.465l2.465.26c1.168.131 1.298 1.039 1.298 1.688v9.602c0 .65-.13 1.559-1.298 1.688l-2.465.26v2.465H92.42v-2.465l-2.466-.26c-1.038-.129-1.168-1.037-1.168-1.688v-9.213l9.733 12.848c.52.648.908.777 1.945.777h8.955V141.5c0-.648.129-1.557 1.297-1.688l2.465-.26v-2.465h-11.938v2.464h.001zM64.651 136.438c-12.068 0-15.182 5.32-15.182 9.861 0 4.672 3.114 9.863 15.182 9.863s15.183-5.191 15.183-9.863c-.001-4.541-3.115-9.861-15.183-9.861zm0 16.22c-4.671 0-6.618-1.947-6.618-6.359s1.946-6.357 6.618-6.357c4.672 0 6.618 1.945 6.618 6.357s-1.946 6.359-6.618 6.359zM58.163 133.582l-8.954-8.305 45.158-5.189 21.801 13.494H58.163zM134.203 98.156l-94.986 17.779 8.175 7.654 43.86-5.449c-.779-.389-.908-.779-.908-1.297 0-.52.389-1.039 1.167-1.168.39 0 24.266-3.504 25.953-3.764.777-.131 2.725-.52 4.801-1.557 2.076-.908 3.373-1.947 4.152-2.727.648-.518 2.465-2.465 3.764-3.893a26.973 26.973 0 0 0 2.076-2.336c.52-.648 1.688-2.076 2.205-2.725.132-.257.001-.517-.259-.517zM149.127 77.395L30.394 107.889l7.137 6.619 36.593-7.008c-.648-.389-1.038-.648-1.038-1.297a1.2 1.2 0 0 1 1.038-1.168l59.431-11.549c.779-.13 2.855-.52 4.801-1.817 1.947-1.168 2.986-2.465 3.635-3.115.777-.908 2.205-2.725 3.244-4.022.777-1.038 1.428-2.076 1.945-2.854.52-.778 1.688-2.855 2.336-3.763.13-.261-.129-.65-.389-.52z" fill="yellow" />

                                <path d="M133.426 42.878c1.557-.649 9.473-4.023 11.158-4.932 1.818-.778 7.008-3.114 8.955-4.022 2.205-.908 8.434-3.893 9.342-4.282 4.412-2.076 9.863-4.671 10.9-5.32.26-.13.779.13.648.519a91.178 91.178 0 0 1-3.244 8.824c-.777 1.817-1.945 4.412-2.984 6.099-1.297 2.077-2.594 3.503-3.633 4.412-2.205 2.077-4.023 3.115-5.969 3.894-1.168.389-3.633 1.427-5.32 2.076-.389.13-7.008 2.595-8.436 2.984L27.798 94.524c-2.725.908-5.839 2.724-5.839 6.228 0 1.559.909 3.635 2.725 5.32l29.586 27.51H40.515c-.259-.777-.649-1.945-1.168-2.725s-.778-1.557-2.336-2.984c-1.167-1.299-2.335-2.465-2.725-2.855l-15.572-15.57c-2.984-2.855-4.542-6.619-4.542-9.992 0-4.672 2.595-9.213 10.381-12.328l108.873-44.25z" fill="yellow" />

                                <path d="M146.271 58.579c1.557-.519 4.543-1.557 5.32-1.816.779-.259 3.893-1.427 4.412-1.557 2.076-.908 4.152-1.687 6.359-2.595.258-.13.648.13.518.519-.26.649-1.686 3.503-2.076 4.152-.908 1.817-1.816 3.504-2.725 4.931-.908 1.428-2.076 3.374-2.854 4.283-1.299 1.557-2.467 2.595-4.283 3.893-2.336 1.557-4.412 2.076-5.32 2.466L59.331 95.951c-.648.129-.908.908-.908 1.168 0 .52.389 1.037.908 1.297l-30.624 7.916-2.465-2.336c-.908-.777-1.298-1.945-1.298-2.854 0-2.207 1.687-3.244 4.413-4.152l116.914-38.411z" fill="yellow" />

                            </g>

                        </svg></a>
                </div>





                <div class="item"><a href=""><svg fill="yellow" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 520 520.1" xml:space="preserve" width="80px" height="70px">
                            <g id="_x33_P2o3m_1_">
                                <g>
                                    <path d="M3,271.7c0-7.5,0-14.9,0-22.4c0.2-1.5,0.5-2.9,0.7-4.4c1.7-12.5,2.4-25.3,5.1-37.6C33.5,92.9,131.9,9.4,248.6,3.9
			c63.6-3,121.2,14.5,171.6,53.6c52.9,41,85.2,94.7,96.7,160.8c1.5,8.5,2.4,17.1,3.5,25.7c0,11.1,0,22.1,0,33.2
			c-0.3,1.3-0.6,2.6-0.8,3.9c-2.9,16.3-4.5,33-8.9,48.7C476.4,450.8,361,528.6,235,515.7c-60.4-6.1-112.5-30.9-155.6-73.5
			c-41.3-40.8-65.9-90.3-73.8-147.9C4.6,286.8,3.8,279.2,3,271.7z M257.8,33.1c-6.8,0-13.8-0.1-20.6,0c-2.5,0-5.1,0.4-7.6,0.6
			c-50.3,4-95.6,21.2-136.3,50.8c-18.9,13.7-34.7,30.2-42.2,52.7c-4.6,13.9-7.4,28.6-9.3,43.2c-6.7,51-2.4,101.3,11.7,150.7
			c9.8,34.8,25.2,67,46.4,96.3c17,23.3,40.4,37.4,67,46.7c59.1,20.5,119,21.6,178.8,4.4c40.4-11.6,73.5-32.6,93.5-72.5
			c27.1-54,43-110.1,43.5-170.7c0.2-23.9-1.8-47.8-5.6-71.4c-5.8-35.6-22.8-64.2-53.6-83.7C373.1,48.2,317.7,32.8,257.8,33.1z" />
                                    <path d="M81.2,189.2c0.8-18.5,0.7-35.8,2.7-52.8c2.3-20,13.6-34.3,32.6-42.1C141.6,84,168,78.3,194.8,74.6
			c29.2-4.1,58.6-5.6,88.1-4.6c35.7,1.2,70.9,5.4,104.6,17.9c7.3,2.7,14.3,5.9,21.3,9.4c18.4,9.2,26.9,25.4,29.9,44.8
			c1.7,10.6,1.8,21.4,2.1,32.1c1.8,71.4-8.6,141.1-30.6,209.1c-4.4,13.4-9.2,26.4-14.1,39.6c-0.7,1.9-2,3.6-3.5,5
			c-14.2,12.9-31.5,19.7-49.7,24.7c-33.1,9-66.9,10.6-100.9,8.5c-25.4-1.5-50.5-5.3-74.5-13.9c-5.7-2.1-11.4-4.6-16.9-7.3
			c-11.1-5.4-18.8-13.6-23.7-25.4c-23.6-56.1-38.6-114.4-43.1-175.2C82.4,222.3,82,205.1,81.2,189.2z M269.9,369.2
			c0-33,0-65.6,0-98.3c10.3,0,19.7,0,29.7,0c0,33,0,65.4,0,98.3c7.4,0,14.1,0,21.3,0c0.1-1.5,0.2-2.7,0.2-4c0-53.1,0-106.1,0-159.1
			c0-2-0.5-4.1-1.5-6c-5.6-11.7-11.5-23.3-17.2-34.9c-1.2-2.7-2.8-3.6-5.8-3.5c-13.6,0.2-27.2,0.1-40.7,0.1c-5.8,0-5.8,0-5.8,5.8
			c0,65.4,0,130.8,0,196.4c0,1.8,0,3.5,0,5.5C256.6,369.2,262.7,369.2,269.9,369.2z M193.2,162.6c-20.7,0-41.3,0-61.6,0
			c0,69.3,0,138.2,0,207.3c7.2,0,14,0,21.3,0c0-33.1,0-65.8,0-99.3c11,0,21.5,0,31.8,0c0-8,0-15.4,0-23.3c-10.8,0-21.2,0-31.6,0
			c0-20.7,0-41.1,0-61.8c13.5,0,26.6,0,40.1,0C193.2,177.5,193.2,170.2,193.2,162.6z M369.4,185.8c7.5,0,14.4,0,21.6,0
			c0-8.1,0-15.7,0-23.2c-21.9,0-43.4,0-64.9,0c0,7.9,0,15.3,0,23.2c7.1,0,13.7,0,21.6,0c0,61.4,0,122.3,0,183.4c7.9,0,14.5,0,21.8,0
			C369.4,308.3,369.4,247.3,369.4,185.8z M224.4,369.9c0-69.5,0-138.6,0-207.9c-7.3,0-14.1,0-20.9,0c0,69.5,0,138.6,0,207.9
			C210.5,369.9,217.3,369.9,224.4,369.9z" />
                                    <path d="M299.4,242.5c-10.1,0-19.5,0-29,0c0-19.2,0-38.2,0-57.7c5.5,0,10.9-0.1,16.4,0.1c0.9,0,2.1,1.5,2.5,2.5
			c3.2,7.6,6.3,15.1,9.4,22.7c0.3,0.7,0.6,1.5,0.6,2.2C299.4,222.2,299.4,232.3,299.4,242.5z" />
                                </g>
                            </g>
                        </svg></a>
                </div>




                <div class="item"><a href=""><svg fill="yellow" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 527 527" xml:space="preserve" width="80px" height="70px">
                            <g>
                                <path d="M263.3,3.7C120.2,3.7,3.5,120.4,3.5,263.5c0,143.1,116.7,259.8,259.8,259.8c143.1,0,259.8-116.7,259.8-259.8
		C523,120.4,406.3,3.7,263.3,3.7L263.3,3.7z M263.3,493.3c-126.6,0-229.8-103.2-229.8-229.8c0-126.6,103.2-229.8,229.8-229.8
		s229.8,103.2,229.8,229.8C493.1,390.1,389.8,493.3,263.3,493.3L263.3,493.3z" />
                                <path d="M188.9,439.1C120.6,410,72.6,342.2,72.6,263.5c0-20,3.1-39.3,8.9-57.5L188.9,439.1L188.9,439.1z" />
                                <path d="M316.2,446.7c-16.8,4.9-34.6,7.5-53,7.5c-18.4,0-36.1-2.6-52.9-7.5l52.9-123.5L316.2,446.7L316.2,446.7z" />
                                <path d="M445.1,206.1c5.8,18.1,8.9,37.4,8.9,57.4c0,78.7-48.1,146.5-116.3,175.5L445.1,206.1L445.1,206.1z" />
                                <path d="M359.4,98.9c23.3,13.7,43.4,32.1,59.1,54l-95,201.9l-32-77.1h-56.4l-32,77.1l-95-201.9c15.7-21.9,35.8-40.4,59.1-54
		l66.6,155.5h59L359.4,98.9L359.4,98.9z" />
                                <path d="M263.3,72.8c18.6,0,36.7,2.7,53.7,7.7l-53.7,129.3L209.6,80.5C226.6,75.5,244.6,72.8,263.3,72.8L263.3,72.8z" />
                            </g>
                        </svg></a>
                </div>





                <div class="item"><a href=""><svg width="80px" height="70px" viewBox="0 0 192.756 192.756" xmlns="http://www.w3.org/2000/svg">

                            <g fill-rule="evenodd" clip-rule="evenodd">

                                <path d="M0 0h192.756v192.756H0V0z" />

                                <path fill="yellow" d="M8.504 113.751h6.803v7.48H27.46v-7.48h6.718v20.993H27.46v-8.839H15.22v8.755H8.504v-20.909zM34.942 113.751h6.629l6.971 8.075 6.886-8.075h6.545l-10.116 12.834v8.159h-6.715v-8.754l-10.2-12.239zM62.823 113.751h6.716v16.234h10.795c1.7 0 2.805-1.697 2.805-3.484v-12.75h6.714v16.745c0 2.634-2.974 4.164-4.675 4.164H62.823v-20.909zM91.298 113.751h22.358c2.635 0 4.76 1.613 4.76 4.889v16.062l-6.715.042v-12.749c0-1.782-.596-2.845-2.891-2.845H98.695v15.641h-7.397v-21.04zM120.457 113.751h19.549c3.912 0 6.93 3.144 6.93 5.566v9.648c-.043 1.699-2.424 5.778-5.398 5.778h-21.08v-20.992h-.001zm6.842 16.32h10.318c1.486 0 2.635-1.105 2.635-2.467v-6.119c0-1.488-1.223-2.377-2.793-2.377h-10.16v10.963zM155.225 113.662h20.953v21.082h-7.482v-5.437h-12.879v5.437h-7.564v-13.686c-.171-4.588 3.911-7.396 6.972-7.396zm.507 7.486v3.396h12.922v-5.357h-10.883c-1.273.001-2.039.768-2.039 1.961zM177.537 113.709h6.715v21.673h-6.715v-21.673zM96.787 52.968c-27.866 0-50.457 11.154-50.457 24.909 0 13.756 22.591 24.911 50.457 24.911 27.864 0 50.456-11.154 50.456-24.911-.001-13.754-22.593-24.909-50.456-24.909zM92 58.512c5.759-2.036 22.869 0 29.515 3.192 2.127 2.04-9.484 8.594-23.309 11.435C78.44 77.125 87.834 61.88 92 58.512zM58.055 88.027c-4.345-3.098-12.853-11.964 1.241-21.181 7.445-4.342 11.61-5.32 16.75-6.382 2.483-.534 4.255.088 2.039 1.95-4.697 4.875-14.447 21.003-15.332 24.551-.711 2.395-2.128 3.012-4.698 1.062zm40.591 10.284c-8.33.884-26.853-1.862-27.209-4.252.356-5.765 29.426-15.337 34.654-10.019 2.218 4.165-2.036 14.004-7.445 14.271zm42.368-16.756c-2.129 4.876-9.307 10.374-24.373 14.097-2.307.528-3.104-.888-1.598-2.218 2.484-1.506 14.449-21.536 15.955-25.527.887-2.04 2.57-1.239 3.635-.443 4.787 3.101 8.42 8.154 6.381 14.091z" />

                            </g>

                        </svg></a>
                </div>



                <div class="item"><a href=""><svg fill="yellow" width="80px" height="70px" viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg">
                            <title>Nissan icon</title>
                            <path d="M20.576 14.955l-.01.028c-1.247 3.643-4.685 6.086-8.561 6.086-3.876 0-7.32-2.448-8.562-6.09l-.01-.029H.71v.329l1.133.133c.7.08.847.39 1.038.78l.048.096c1.638 3.495 5.204 5.752 9.08 5.752 3.877 0 7.443-2.257 9.081-5.747l.048-.095c.19-.39.338-.7 1.038-.781l1.134-.134v-.328zM3.443 9.012c1.247-3.643 4.686-6.09 8.562-6.09 3.876 0 7.319 2.447 8.562 6.09l.01.028h2.728v-.328l-1.134-.133c-.7-.081-.847-.39-1.038-.781l-.047-.096C19.448 4.217 15.88 1.96 12.005 1.96c-3.881 0-7.443 2.257-9.081 5.752l-.048.095c-.19.39-.338.7-1.038.781l-1.133.133v.329h2.724zm13.862 1.586l-1.743 2.795h.752l.31-.5h2.033l.31.5h.747l-1.743-2.795zm1.033 1.766h-1.395l.7-1.124zm2.81-1.066l2.071 2.095H24v-2.795h-.614v2.085l-2.062-2.085h-.795v2.795h.619zM0 13.393h.619v-2.095l2.076 2.095h.781v-2.795h-.619v2.085L.795 10.598H0zm4.843-2.795h.619v2.795h-.62zm4.486 2.204c-.02.005-.096.005-.124.005H6.743v.572h2.5c.019 0 .167 0 .195-.005.51-.048.743-.472.743-.843 0-.381-.243-.79-.705-.833-.09-.01-.166-.01-.2-.01H7.643a.83.83 0 0 1-.181-.014c-.129-.034-.176-.148-.176-.243 0-.086.047-.2.18-.238a.68.68 0 0 1 .172-.014h2.357v-.562H7.6c-.1 0-.176.004-.238.014a.792.792 0 0 0-.695.805c0 .343.214.743.685.81.086.009.205.009.258.009H9.2c.029 0 .1 0 .114.005.181.023.243.157.243.276a.262.262 0 0 1-.228.266zm4.657 0c-.02.005-.096.005-.129.005H11.4v.572h2.5c.019 0 .167 0 .195-.005.51-.048.743-.472.743-.843 0-.381-.243-.79-.705-.833-.09-.01-.166-.01-.2-.01H12.3a.83.83 0 0 1-.181-.014c-.129-.034-.176-.148-.176-.243 0-.086.047-.2.18-.238a.68.68 0 0 1 .172-.014h2.357v-.562h-2.395c-.1 0-.176.004-.238.014a.792.792 0 0 0-.695.805c0 .343.214.743.686.81.085.009.204.009.257.009h1.59c.029 0 .1 0 .114.005.181.023.243.157.243.276a.267.267 0 0 1-.228.266Z" />
                        </svg>

                    </a>
                </div>


                <div class="item"><a href=""><svg width="80px" fill="yellow" height="70px" viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                            <title>renault</title>
                            <desc>Created with Sketch.</desc>
                            <g id="renault" stroke="none" stroke-width="1" fill="yellow" fill-rule="evenodd">
                                <path d="M37.4290909,1.05590909 C37.1186364,1.61590909 35.0836364,5.27 32.9072727,9.17636364 C30.7309091,13.0822727 28.0245455,17.9404545 26.8931818,19.9718182 C25.7618182,22.0027273 23.5886364,25.9018182 22.0640909,28.6363636 C20.5395455,31.3709091 18.1527273,35.6536364 16.7595455,38.1536364 C15.3663636,40.6536364 13.3286364,44.31 12.2309091,46.2795455 L10.235,49.8604545 L11.1431818,51.4881818 C11.6427273,52.3831818 14.5327273,57.5472727 17.5654545,62.9640909 C20.5986364,68.3809091 25.2859091,76.7540909 27.9813636,81.5718182 C32.5259091,89.6931818 35.8540909,95.6381818 37.5640909,98.6886364 L38.2672727,99.9431818 L49.9336364,99.9409091 L61.6004545,99.9390909 L62.0863636,99.065 C63.005,97.4122727 68.145,88.22 79.7572727,67.4622727 C82.0736364,63.3213636 85.235,57.6672727 86.7827273,54.8972727 L89.5959091,49.8613636 L86.7340909,44.7177273 C82.7145455,37.4922727 67.5345455,10.1981818 64.4527273,4.65454545 L61.8863636,0.0377272727 L49.94,0.0377272727 L37.9940909,0.0377272727 L37.4290909,1.05590909 M64.6336364,6.59545455 C66.4459091,9.83772727 69.44,15.1963636 71.2877273,18.5036364 C73.1354545,21.8109091 75.445,25.9445455 76.4204545,27.6895455 C84.7268182,42.5481818 88.6490909,49.5827273 88.6959091,49.7045455 C88.7454545,49.8327273 87.6045455,49.8486364 78.24,49.8486364 L67.7286364,49.8486364 L67.3095455,49.1145455 C67.0795455,48.7109091 66.2709091,47.3154545 65.5131818,46.0131818 C62.8531818,41.4427273 58.0527273,33.1822727 55.3045455,28.4468182 C53.7781818,25.8168182 52.3690909,23.3936364 52.1731818,23.0618182 L51.8168182,22.4590909 L52.0968182,21.8018182 C52.2509091,21.44 53.0827273,19.5804545 53.9454545,17.6695455 C56.8718182,11.1877273 59.5645455,5.08 59.5645455,4.92409091 C59.5645455,4.89272727 59.2981818,4.86863636 58.9727273,4.87045455 L58.3809091,4.87363636 L56.5677273,8.06636364 C55.5704545,9.82272727 52.1236364,15.8831818 48.9081818,21.5340909 C42.0890909,33.5186364 41.5754545,34.4218182 36.6140909,43.1427273 C34.5490909,46.7722727 32.86,49.7659091 32.86,49.795 C32.86,49.8245455 33.8718182,49.8495455 35.1090909,49.8509091 L37.3581818,49.8531818 L38.5313636,51.9577273 C39.6240909,53.9172727 47.6640909,68.2936364 49.2681818,71.1554545 C49.6618182,71.8586364 50.015,72.4336364 50.0527273,72.4336364 C50.09,72.4336364 51.9104545,69.2377273 54.0981818,65.3313636 C56.2854545,61.425 59.125,56.3540909 60.4081818,54.0627273 L62.7409091,49.8959091 L65.2245455,49.8704545 C66.5909091,49.8568182 67.7081818,49.8681818 67.7081818,49.8963636 C67.7081818,49.9240909 64.7818182,55.0277273 61.205,61.2377273 C57.6281818,67.4477273 54.1495455,73.4872727 53.4745455,74.6590909 C52.7995455,75.8309091 50.7122727,79.4531818 48.8359091,82.7081818 C46.9595455,85.9636364 44.6259091,90.0118182 43.6504545,91.7045455 L41.8763636,94.7822727 L41.2386364,94.8104545 C40.745,94.8322727 40.6127273,94.8109091 40.6518182,94.7159091 C40.6795455,94.6481818 42.4322727,90.7036364 44.5463636,85.9504545 C46.6609091,81.1972727 48.4013636,77.2763636 48.4140909,77.2368182 C48.4318182,77.1827273 37.0568182,57.3004545 33.3136364,50.8427273 L32.7645455,49.8959091 L21.9240909,49.8486364 L11.0836364,49.8013636 L13.8336364,44.8768182 C15.3459091,42.1686364 16.8954545,39.3986364 17.2763636,38.7218182 C17.6577273,38.0445455 19.3872727,34.955 21.12,31.8559091 C26.39,22.4304545 29.9645455,16.0390909 31.5809091,13.1536364 C32.4272727,11.6431818 34.1309091,8.59590909 35.3677273,6.38272727 C36.6040909,4.16909091 37.8272727,1.985 38.0859091,1.52954545 L38.5559091,0.700909091 L49.9477273,0.700909091 L61.3390909,0.700909091 L64.6336364,6.59545455 M50.6263636,29.6086364 C50.8931818,30.0895455 53.4872727,34.7231818 56.3918182,39.9054545 C59.2963636,45.0877273 61.7368182,49.4622727 61.8154545,49.6268182 L61.9586364,49.9259091 L59.9213636,53.5568182 C58.8004545,55.5536364 56.19,60.2131818 54.12,63.9109091 C52.05,67.6090909 50.2854545,70.75 50.1990909,70.8913636 L50.0422727,71.1481818 L48.0172727,67.5295455 C42.5395455,57.7413636 40.2268182,53.6122727 39.235,51.8513636 C38.6381818,50.7913636 38.1690909,49.8745455 38.1922727,49.8136364 C38.2154545,49.7531818 40.4613636,45.7409091 43.1827273,40.8981818 C45.9040909,36.055 48.555,31.3363636 49.0736364,30.4118182 C49.5918182,29.4872727 50.0445455,28.7318182 50.0790909,28.7327273 C50.1136364,28.7336364 50.36,29.1277273 50.6263636,29.6086364" id="path0" fill="yellow">

                                </path>
                            </g>
                        </svg></a>
                </div>


                <div class="item"><a href=""><svg width="80px" height="70px" viewBox="0 0 192.756 192.756" xmlns="http://www.w3.org/2000/svg">

                            <g fill-rule="evenodd" clip-rule="evenodd">

                                <path d="M0 0h192.756v192.756H0V0z" />

                                <path fill="yellow" d="M95.964 102.18H39.893L12.1 150.979h56.233l27.631-48.799zM124.453 52.119L96.418 2.835 68.302 52.119l28.116 49.365 28.035-49.365zM124.424 150.979h56.232l-27.793-48.799H96.792l27.632 48.799z" />

                                <path d="M121.93 189.216h4.199v-22.432h-4.199v22.432zM169.023 189.216h4.2v-22.432h-4.2v22.432zM43.008 189.216h4.199v-22.432h-4.199v22.432zM63.257 166.784H50.27v3.804h4.329v18.628h4.329v-18.628h4.329v-3.804zM160.615 175.311h-9.455v-8.527h-4.199v22.432h4.199v-10.101h9.455v10.101h4.197v-22.432h-4.197v8.527zM29.454 176.819l-3.936-10.035h-4.854v22.432h4.198v-13.905l4.592 11.15 4.46-11.281v14.036h4.197v-22.432h-4.722l-3.935 10.035zM98.832 166.786h-4.16v16.004c0 1.742-1.951 3.153-3.693 3.153-1.741 0-3.692-1.411-3.692-3.153v-16.004H83.05l.062 15.808c0 4.047 3.819 7.328 7.866 7.328 4.048 0 7.867-3.281 7.867-7.328l-.013-15.808zM115.023 177.082c.59-.394 2.82-1.706 2.82-4.525 0-3.937-3.148-5.707-5.248-5.772h-9.725v22.432h8.609c3.412 0 7.084-1.64 7.084-5.969.001-3.739-1.768-5.183-3.54-6.166zm-3.345 8.33h-4.607v-14.824h4.41c1.182 0 2.1.984 2.1 2.165s-.459 2.558-2.033 2.558h-1.834v3.805h1.965c1.182 0 2.82 1.115 2.756 3.41-.058 1.967-1.642 2.886-2.757 2.886zM64.938 181.936c-.033.229 0 .492.015.918 0 3.868 3.135 6.807 7.003 6.807 3.868 0 7.003-2.61 7.003-6.479 0-2.035-.797-3.607-2.182-4.887-1.131-1.044-4.353-2.61-5.608-3.378-1.181-.722-1.738-1.278-1.766-2.328 0-1.537 1.016-2.619 2.553-2.619a2.783 2.783 0 0 1 2.783 2.783c.028.394.038.787.038 1.049h3.719v-1.049c0-3.611-2.276-6.474-6.54-6.474-3.611 0-6.54 2.473-6.54 6.474.013 1.771.833 3.476 2.867 4.821 2.185 1.444 4.919 2.524 5.837 3.443.554.554.897 1.319.897 2.164 0 1.69-1.371 2.897-3.062 2.897s-3.05-1.487-3.258-2.897c-.044-.36-.153-.983-.12-1.246h-3.639v.001zM135.842 174.917c-1.182-.722-1.738-1.278-1.768-2.328 0-1.537 1.018-2.619 2.555-2.619a2.783 2.783 0 0 1 2.781 2.783c.029.394.039.787.039 1.049h3.719v-1.049c0-3.611-2.277-6.474-6.539-6.474-3.613 0-6.541 2.473-6.541 6.474.014 1.771.834 3.476 2.867 4.821 2.186 1.444 4.92 2.524 5.838 3.443.553.554.896 1.319.896 2.164 0 1.69-1.371 2.897-3.061 2.897-1.691 0-3.051-1.487-3.26-2.897-.043-.36-.152-.983-.119-1.246h-3.641c-.033.229 0 .492.016.918 0 3.868 3.135 6.807 7.004 6.807 3.867 0 7.002-2.61 7.002-6.479 0-2.035-.797-3.607-2.182-4.887-1.13-1.043-4.352-2.609-5.606-3.377z" />

                            </g>

                        </svg></a>
                </div>

                <div class="item"><a href=""><svg fill="yellow" width="80px" height="70px" viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm0 .78C18.196.78 23.219 5.803 23.219 12c0 6.196-5.022 11.219-11.219 11.219C5.803 23.219.781 18.196.781 12S5.804.78 12 .78zm-.678.63c-.33.014-.66.042-.992.078l-.107 2.944a9.95 9.95 0 0 1 .71-.094l.07-1.988-.013-.137.043.13.664 1.489h.606l.664-1.488.04-.131-.01.137.07 1.988c.232.022.473.054.71.094l-.109-2.944a14.746 14.746 0 0 0-.992-.078l-.653 1.625-.023.12-.023-.12-.655-1.625zm6.696 1.824-1.543 2.428c.195.15.452.371.617.522l1.453-.754.092-.069-.069.094-.752 1.453c.163.175.398.458.53.63l2.43-1.544a16.135 16.135 0 0 0-.46-.568L18.777 6.44l-.105.092.078-.115.68-1.356-.48-.48-1.356.68-.115.078.091-.106 1.018-1.539c-.18-.152-.351-.291-.57-.46zM5.5 3.785c-.36.037-.638.283-1.393 1.125a18.97 18.97 0 0 0-.757.914l2.074 1.967c.687-.76.966-1.042 1.508-1.613.383-.405.6-.87.216-1.317-.208-.242-.558-.295-.85-.175l-.028.01.01-.026a.7.7 0 0 0-.243-.734.724.724 0 0 0-.537-.15zm.006.615c.136-.037.277.06.308.2.032.14-.056.272-.154.382-.22.25-1.031 1.098-1.031 1.098l-.402-.383c.417-.51.861-.974 1.062-1.158a.55.55 0 0 1 .217-.139zM12 4.883a7.114 7.114 0 0 0-7.08 6.388v.002a7.122 7.122 0 0 0 8.516 7.697 7.112 7.112 0 0 0 5.68-6.97A7.122 7.122 0 0 0 12 4.885v-.002zm-5.537.242c.047 0 .096.013.14.043.088.059.128.16.106.26-.026.119-.125.231-.205.318l-1.045 1.12-.42-.4s.787-.832 1.045-1.099c.102-.106.168-.17.238-.205a.331.331 0 0 1 .14-.037zM12 5.818A6.175 6.175 0 0 1 18.182 12H12v6.182A6.175 6.175 0 0 1 5.818 12H12V5.818z" />
                        </svg></a>
                </div> -->

                <?php endforeach?>

            </div>
        </div>
    </article>
</section>