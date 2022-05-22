<?php
$hoje = date('d/m/Y');

$data = $parameters['viewParameter'] ??[];

//print_r($data);

echo $data['url']

?>

<div class="card-body">
  <div class="row">
    <div class="col-md-8">
      <p class="text-center">
        <strong><?php echo $hoje ?></strong>
      </p>

      <div style="
    display: flex;
    gap: 74px;
    justify-content: center;
    margin-top: 69px;">

      <div style="
      background: #007bff;;
      padding: 10px;
      width: 120px;
      border-radius: 50%;
      height: 120px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;" >
        <div style="
        display: flex;
        flex-direction: column;
        gap: 9px;">
          <span>700</span>
          <div>Clientes</div>
        </div>
      </div>

        <div style="
      background: #28a745;
      padding: 10px;
      width: 120px;
      border-radius: 50%;
      height: 120px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;">
          <div style="
        display: flex;
        flex-direction: column;
        gap: 9px;">
            <span>700</span>
            <div>Perfil Completo</div>
          </div>
        </div>

        <div style="
      background: #dc3545;;
      padding: 10px;
      width: 120px;
      border-radius: 50%;
      height: 120px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;">
          <div style="
        display: flex;
        flex-direction: column;
        gap: 9px;">
            <span>700</span>
            <div>Perfil Incompleto</div>
          </div>
        </div>

      </div>


      <!-- /.chart-responsive -->
    </div>
    <!-- /.col -->
    <div class="col-md-4">
      <p class="text-center">
        <strong>Goal Completion</strong>
      </p>

      <div class="progress-group">
        Quantidade de clientes com sobrenome
        <span class="float-right"><b>160</b>/200</span>
        <div class="progress progress-sm">
          <div class="progress-bar bg-primary" style="width: 80%"></div>
        </div>
      </div>
      <!-- /.progress-group -->

      <div class="progress-group">
        Quantidade de clientes sem sobrenome
        <span class="float-right"><b>310</b>/400</span>
        <div class="progress progress-sm">
          <div class="progress-bar bg-danger" style="width: 75%"></div>
        </div>
      </div>

      <!-- /.progress-group -->
      <div class="progress-group">
        <span class="progress-text">Quantidade de clientes com email válido</span>
        <span class="float-right"><b>480</b>/800</span>
        <div class="progress progress-sm">
          <div class="progress-bar bg-success" style="width: 60%"></div>
        </div>
      </div>

      <!-- /.progress-group -->
      <div class="progress-group">
        Quantidade de clientes com email inválido
        <span class="float-right"><b>250</b>/500</span>
        <div class="progress progress-sm">
          <div class="progress-bar bg-warning" style="width: 50%"></div>
        </div>
      </div>
      <!-- /.progress-group -->

      <div class="progress-group">
        Quantidade de clientes com gênero
        <span class="float-right"><b>250</b>/500</span>
        <div class="progress progress-sm">
          <div class="progress-bar bg-warning" style="width: 50%"></div>
        </div>
      </div>

      <div class="progress-group">
        Quantidade de clientes sem gênero
        <span class="float-right"><b>250</b>/500</span>
        <div class="progress progress-sm">
          <div class="progress-bar bg-warning" style="width: 50%"></div>
        </div>
      </div>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div>







<div class="card">
  <div class="card-header border-0">
    <h3 class="card-title">Informações dos Clientes</h3>
    <div class="card-tools">
      <a href="#" class="btn btn-sm btn-tool">
        <i class="fas fa-download"></i>
      </a>
      <a href="#" class="btn btn-sm btn-tool">
        <i class="fas fa-bars"></i>
      </a>
    </div>
  </div>
  <div class="card-body">
    <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
      <p class="text-success text-xl">
        <i class="ion ion-ios-refresh-empty"></i>
      </p>
      <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                      <i class="ion ion-android-arrow-up text-success"></i> 12%
                    </span>
        <span class="text-muted">Total de clientes com o nome diferente</span>
      </p>
    </div>
    <!-- /.d-flex -->
    <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
      <p class="text-warning text-xl">
        <i class="ion ion-ios-cart-outline"></i>
      </p>
      <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                      <i class="ion ion-android-arrow-up text-warning"></i> 0.8%
                    </span>
        <span class="text-muted">Total de clientes com cidades diferente</span>
      </p>
    </div>
    <!-- /.d-flex -->
    <div class="d-flex justify-content-between align-items-center mb-0">
      <p class="text-danger text-xl">
        <i class="ion ion-ios-people-outline"></i>
      </p>
      <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                      <i class="ion ion-android-arrow-down text-danger"></i> 1%
                    </span>
        <span class="text-muted">publico por sexo</span>
      </p>
    </div>
    <!-- /.d-flex -->
  </div>
</div>



