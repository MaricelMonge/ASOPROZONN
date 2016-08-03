   <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <!--<?php echo $this->Html->link('ASOPROZONN', array('controller' => 'pages', 'action' => 'home'), array('class' => 'navbar-brand' )); ?>-->
          
        
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
                  <?php echo $this->Html->link('ASOPROZONN', array('controller'=>'pages', 'action'=>'home'))?>
            </li>
            <?php if(!isset($current_user)): ?>
                <?php echo $this->Form->create('User', array('class' => 'navbar-form navbar-right')); ?>
                <div class="form-group">
                  <?php echo $this->Form->input('username', array('label' => false, 'class' => 'form-control', 'placeholder' => 'Usuario')); ?>
                </div>
                <div class="form-group">
                  <?php echo $this->Form->input('password', array('label' => false, 'class' => 'form-control', 'placeholder' => 'Contraseña')); ?>
                </div>
                <?php echo $this->Form->button('Acceder', array('class' => 'btn btn-success')); ?>
                <?php echo $this->Form->end(); ?>
            <?php endif; ?>
            
            <?php if($current_user['role']=='Administrador'||$current_user['role']=='Socio'){?>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Socios <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><?php echo $this->Html->link('Lista de Socios', array('controller'=>'users', 'action'=>'index'))?></li>
                    <?php if($current_user['role']=='Administrador'){?>
                        <li><?php echo $this->Html->link('Nuevo Socio', array('controller'=>'users', 'action'=>'add'))?></li>
                    <?php }?>
                  </ul>
                </li>
            <?php }?>
            <?php if($current_user['role']=='Administrador'||$current_user['role']=='Socio'){?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Productos <span class="caret"></span></a>
              <ul class="dropdown-menu">
                    <li><?php echo $this->Html->link('Lista de Productos', array('controller'=>'productos', 'action'=>'index'))?></li>
                    <?php if($current_user['role']=='Administrador'){?>
                        <li><?php echo $this->Html->link('Nuevo Producto', array('controller'=>'productos', 'action'=>'add'))?></li>
                    <?php }?>    
              </ul>
            </li>
            <?php }?>
            <?php if($current_user['role']=='Administrador'||$current_user['role']=='Socio'){?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Proveedores <span class="caret"></span></a>
              <ul class="dropdown-menu">
                    <li><?php echo $this->Html->link('Lista de Proveedores', array('controller'=>'proveedores', 'action'=>'index'))?></li>
                    <?php if($current_user['role']=='Administrador'){?>  
                        <li><?php echo $this->Html->link('Nuevo Proveedor', array('controller'=>'proveedores', 'action'=>'add'))?></li>
                    <?php }?>  
              </ul>
            </li>
            <?php }?>  
             <?php if($current_user['role']=='Administrador'||$current_user['role']=='Socio'){?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Insumos <span class="caret"></span></a>
              <ul class="dropdown-menu">
                    <li><?php echo $this->Html->link('Lista de Insumos', array('controller'=>'insumos', 'action'=>'index'))?></li>
                     <?php if($current_user['role']=='Administrador'){?>  
                        <li><?php echo $this->Html->link('Nuevo Insumo', array('controller'=>'insumos', 'action'=>'add'))?></li>
                    <?php }?>  
              </ul>
            </li>
            <?php }?> 

            <?php if($current_user['role']=='Administrador'){?>  
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Clientes <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                      <li><?php echo $this->Html->link('Lista de Clientes', array('controller'=>'clientes', 'action'=>'index'))?></li>
                       <li><?php echo $this->Html->link('Nuevo Cliente', array('controller'=>'clientes', 'action'=>'add'))?></li>
                  </ul>
                </li>
                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Pagos <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                      <li><?php echo $this->Html->link('Lista de Pagos', array('controller'=>'pagos', 'action'=>'index'))?></li>
                       <li><?php echo $this->Html->link('Nuevo Pago', array('controller'=>'pagos', 'action'=>'add'))?></li>
                  </ul>
                </li>
                
                <li class="dropdown">
                      <?php echo $this->Html->link('Facturas', array('controller'=>'ventas', 'action'=>'index'))?>
                </li>
             <?php }?>  
             <?php if($current_user['role']=='Administrador'||$current_user['role']=='Socio'){?>
            <li class="dropdown">
                  <?php echo $this->Html->link('Sobre Nosotros', array('controller'=>'pages', 'action'=>'aboutus'))?>
            </li>
              <?php }?>  
            <?php if($current_user['role']=='Administrador'){?>  
                <?php echo $this->Html->link('Pedidos', array('controller'=>'pedidos', 'action'=>'view'), array('class'=>'btn btn-info navbar-btn'));?>
            <?php }?>  
           <?php if(isset($current_user)): ?>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Perfil <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                      <li><?php echo $this->Html->link('Cambiar perfil', array('controller'=>'users', 'action'=>'edit', $current_user['id']));?></li>
                       <li><?php echo $this->Html->link('Cambiar foto', array('controller'=>'users', 'action'=>'edit_image',$current_user['id']));?></li>
                       <li><?php echo $this->Html->link('Cambiar contraseña', array('controller'=>'users', 'action'=>'new_password',$current_user['id']));?></li>
                       <li><?php echo $this->Html->link('Cerrar sesión', array('controller'=>'users', 'action'=>'logout'), array('class'=>'btn btn-success navbar-btn'));?></li>
                  </ul>
                </li>

            <?php endif; ?>
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>