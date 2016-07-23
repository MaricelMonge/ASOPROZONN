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
           <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Socios <span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><?php echo $this->Html->link('Lista de Socios', array('controller'=>'socios', 'action'=>'index'))?></li>
                   <li><?php echo $this->Html->link('Nuevo Socio', array('controller'=>'socios', 'action'=>'add'))?></li>
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Productos <span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><?php echo $this->Html->link('Lista de Productos', array('controller'=>'productos', 'action'=>'index'))?></li>
                   <li><?php echo $this->Html->link('Nuevo Producto', array('controller'=>'productos', 'action'=>'add'))?></li>
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Proveedores <span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><?php echo $this->Html->link('Lista de Proveedores', array('controller'=>'proveedores', 'action'=>'index'))?></li>
                   <li><?php echo $this->Html->link('Nuevo Proveedor', array('controller'=>'proveedores', 'action'=>'add'))?></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Clientes <span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><?php echo $this->Html->link('Lista de Clientes', array('controller'=>'clientes', 'action'=>'index'))?></li>
                   <li><?php echo $this->Html->link('Nuevo Cliente', array('controller'=>'clientes', 'action'=>'add'))?></li>
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Facturas <span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><?php echo $this->Html->link('Lista de Facturas', array('controller'=>'ventas', 'action'=>'index'))?></li>
              </ul>
            </li>
            <li class="dropdown">
                  <?php echo $this->Html->link('Sobre Nosotros', array('controller'=>'pages', 'action'=>'aboutus'))?>
            </li>
            
            
            
           <?php echo $this->Html->link('Pedidos', array('controller'=>'pedidos', 'action'=>'view'), array('class'=>'btn btn-info navbar-btn'));?>
            
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>