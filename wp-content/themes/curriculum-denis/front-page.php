<?php get_header();?>


<main>
            <!-- Hero Section  -->
            <section class="hero">
                  <div class="profile" >
                    <div class="profile-image"><img src="<?php echo get_template_directory_uri().'/assets/imgs/profile-image.png'; ?>" alt=""></div>
                    <div class="profile-details">
                        <h2>Denis Soukharev</h2>
                        <h4>Desarollador Frontend Wordpress</h4>
                        <p><strong> Direccion: </strong> <span>Santander, Cantabria</span></p>
                        <p><strong> E-mail: </strong><span>dsoukh@gmail.com</span></p>
                        <p><strong> Telefono: </strong><span>+34642211040</span></p>
                        <button class="descargar"> <a href="<?php echo get_site_url().'/wp-content/uploads/2023/03/CV-Denis-Soukharev-1.pdf'; ?>">Descargar en Pdf</a></button>
                    </div>
                  </div>
                  
            </section>


             <!-- Perfil -->
             <section class="perfil" id="perfil">
                <div class="perfil-sumar">
                <h2>Perfil</h2>
                <p>Un programmador junior altamente motivado, flexible y trabajador con un conocimiento perfecto de <strong> Ingles, Español y Ruso.</strong> Buscando activamente una oportunidad para adquirir experiencia laboral y aplicar los conocimientos adquiridos hasta ahora.</p>
               </div>
             </section>


            <!-- Competencias -->
            <section class="comp" id="competencias">
                 <h2>Competencias</h2>
                   <div class="competencias-cajas">
                     <div class="competencias-caja">
                        <img src="<?php echo get_template_directory_uri().'/assets/imgs/php.png'; ?>" alt="">
                         <h6>PHP</h6>
                         <p>Desarolle varios proyectos utilizando PHP</p>
                     </div>
                     <div class="competencias-caja">
                        <img src="<?php echo get_template_directory_uri().'/assets/imgs/html-5 (1).png'; ?>" alt="">
                         <h6>HTML</h6>
                         <p>Desarolle varios proyectos utilizando HTML</p>
                     </div>
                     <div class="competencias-caja">
                        <img src="<?php echo get_template_directory_uri().'/assets/imgs/css-3.png'; ?>" alt="">
                         <h6>CSS</h6>
                         <p>Desarolle varios proyectos utilizando CSS</p>
                     </div>
                     <div class="competencias-caja">
                        <img src="<?php echo get_template_directory_uri().'/assets/imgs/wordpress.png'; ?>" alt="">
                         <h6>Wordpress</h6>
                         <p>Desarolle varios proyectos utilizando Wordpress</p>
                     </div>
                   </div>
                   <!-- Baras de progreso  -->
                   <div class="progreso">
                    <div class="progreso-left">
                        <h6>Javascript</h6>
                        <div class="progress">
                            <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        <h6>XML</h6>
                        <div class="progress">
                            <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                    </div>
                    <div class="progreso-right">
                        <h6>Yii</h6>
                        <div class="progress">
                            <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        <h6>MySql</h6>
                        <div class="progress">
                            <div class="progress-bar w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                    </div>
                   </div>
                  

            </section>

            <?php $experiencia= get_field('experiencia'); ?>

              <!-- Experiencia -->
              <section class="experiencia" id="experiencia">
                <h2>Experiencia</h2>

                <div class="experiencia-cajas">
                    <div class="experiencia-caja">
                         <p><strong>enero 2023</strong></p>
                         <p>Practicas</p>
                         <p><span>CeinMark, Santander</span></p>
                         <p>Desarollo de aplicaciones para administrar processos internos de empresa
                            (administracion y base de datos de de portatiles)
                            PHP-Yii2-MySql-Javascript-Html-CSS</p>
                    </div>
                    <div class="experiencia-caja">
                         <p><strong>ene 2020 - nov 2022</strong></p>
                         <p>Desarollador Web</p>
                         <p><span>Eksprovocator, Remoto(Estados Unidos)</span></p>
                         <p>Diseño y desarollo de pagina web con tienda online(Wordpress, Html, Css, PHP, Woocommerce, Stripe)
                            Desarollo de Temas,Plugins personalizados (HTML,CSS,JS,PHP,Api)
                            Maquetacion Web (HTML, CSS , Elementor,PHP)
                            Mantenimiento Web</p>
                    </div>
                    <div class="experiencia-caja">
                         <p><strong> <?php echo $experiencia['fechas'] ?></strong></p>
                         <p><?php echo $experiencia['puesto'] ?></p>
                         <p><span><?php echo $experiencia['empresa'] ?></span></p>
                         <p><?php echo $experiencia['descripcion'] ?></p>
                    </div>
                </div>



            </section>




            <!-- Formacion -->
            <section class="formacion" id="formacion">
                <h2>Formacion</h2>

                <div class="formacion-cajas">
                    <div class="formacion-caja">
                        <p><strong>sep 2015 - jul 2017</strong></p>
                        <p>Bachillerato</p>
                        <p><span>Laude British School of Villa Real, Villa Real</span></p>
                    </div>
                    <div class="formacion-caja">
                        <p><strong>sep 2018 - jul 2020</strong></p>
                        <p>Ingenieria Electrica</p>
                        <p><span>Universitat Jaume 1, Castellon-de-la-Plana</span></p>
                    </div>
                    <div class="formacion-caja">
                        <p><strong>jun 2022 - dic 2022</strong></p>
                        <p>Programación con lenguajes orientados a objetos y bases de datos</p>
                        <p><span>Alpe Formacion, Santander</span></p>
                    </div>
                    <div class="formacion-caja">
                        <p><strong>sep 2021 - dic 2021</strong></p>
                        <p>The Modern Javascript Bootcamp Course</p>
                        <p><span>Udemy, Online</span></p>
                    </div>

                    <?php if($formacion = get_field('formacion')){ ?>
                    <div class="formacion-caja">
                        <p><strong><?php echo $formacion['fechas'] ?></strong></p>
                        <p><?php echo $formacion['curso'] ?></p>
                        <p><span><?php echo $formacion['centro'] ?></span></p>
                    </div>
                    <?php   }?>
                </div>



            </section>

            <!-- Contactos -->

            <section class="contactos" id="contactos">

            <div class="contacto">
            <?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?>

            </div>


            </section>
        </main>


        <?php get_footer();?>