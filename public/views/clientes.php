<div class="row" id="buscar">
  <div class="col-lg col-6">
    <!-- small box -->
    <div style="height: auto" class="small-box btn-default">
      <div class="inner">
        <form id="formBuscaProdutos"">
        <div style="display: flex; justify-content: end;margin-bottom: 11px;">
          <button type="button" onclick="newUser()"  class="btn btn-info btn-flat">Novo Cliente</button>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Cliente</span>
          </div>
          <input  list="list_clientes" type="text" class="form-control" id="nm_cliente" placeholder="Nome Cliente">
        </div>
        <datalist id="list_clientes"></datalist>
        <div style="display: flex" class="form-group">
          <div style="margin-right: 10px;" class="custom-control custom-radio">
            <input class="custom-control-input" type="radio" name="rede"  value="DC" id="redeDC" checked>
            <label for="redeDC" class="custom-control-label">Cadastro Completo</label>
          </div>
          <div class="custom-control custom-radio">
            <input class="custom-control-input" type="radio" name="rede" value="PP" id="redePP">
            <label for="redePP" class="custom-control-label">E-mail Validos</label>
          </div>
          <div style="margin-left: 9px;" class="custom-control custom-radio">
            <input class="custom-control-input" type="radio" name="rede"  value="Aniversariante" id="redeFA">
            <label for="redeFA" class="custom-control-label " >Aniversariante</label>
          </div>
        </div>
        <div style="text-align: center">
          <button type="button" onclick="sellers()"  class="btn btn-info btn-flat">Buscar</button>
        </div>
        </form>
      </div>
      <div class="icon">
        <i style="top: 1px;margin-top: 103px;" class="fas fa-search fa-sm"></i>
      </div>
    </div>
  </div>
</div>
<div style="display: block" class="row" id="listaDeProdutos">
  <div class="col-lg col-6">
    <!-- small box -->
    <div style="height: auto" class="small-box btn-default">
      <div class="inner">
        <h4>Produtos</h4>
        <div  style="display: flex;justify-content: flex-end;margin-right: 115px;">
          <img id="errorConnectionDiv"  onclick="errorConnection()" alt="Erros de conex�o" style="display: none;height: 33px;cursor: pointer" src="/ecommerce/pages/imgs/26a0.png">
        </div>
        <br>
        <br>
        <table class="table table-hover">
          <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Produto</th>
            <th scope="col" style="text-align: center">Filial</th>
            <th scope="col" style="text-align: center">Rede</th>
            <th scope="col" style="text-align: center">Saldo</th>
          </tr>
          </thead>
          <tbody style="font-size: 14px;" id="tabelaProdutos">
          </tbody>
        </table>
      </div>
      <div class="icon">
        <i class="far fa-chart-bar"></i>
      </div>
    </div>
  </div>
</div>

<!-- __________________________________modal produto_________________________________________ -->
<div class="modal fade" id="Modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="width: 901px;">
      <div class="modal-header">
        <h4 class="modal-title">
          <div style="margin-left: 11px;" id="titleModal"></div>
        </h4>
        <button id="fecharModal" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div style="display: flex;justify-content: center;flex-direction: column;" id="contentModal" class="input-group input-group-sm">
          <!-- __________________________________dentro da modal_________________________________________ -->

          <!-- __________________________________Fim_________________________________________ -->
        </div>
      </div>
      <div class="modal-footer justify-content-between">
      </div>
    </div>
  </div>
</div>

<script>
  function showModal(title,content){
    document.getElementById('titleModal').innerHTML = title
    document.getElementById('contentModal').innerHTML = content
    $('#Modal').modal('show')
  }
  function newUser(){
    const titleModel = 'Novo Cliente'
    const content = ''+
      '<div style="display: flex;justify-content: end;margin-bottom: 10px">'+
      '<button type="button" onclick="buttonImport()"  class="btn btn-info btn-flat">Importar</button>' +
      '</div>'+
      '<div id="boxRegister" style="display: block">'+
      '<div class="input-group mb-3">'+
      '<div class="input-group-prepend">'+
      '<span class="input-group-text">Nome</span>'+
      '</div>'+
      '<input  list="list_clientes" type="text" class="form-control" id="nm_cliente" placeholder="Nome Cliente">'+
      '</div>'+
      '<div class="input-group mb-3">'+
      '<div class="input-group-prepend">'+
      '<span class="input-group-text">Nome</span>'+
      '</div>'+
      '<input  list="list_clientes" type="text" class="form-control" id="nm_cliente" placeholder="Nome Cliente">'+
      '</div>'+
      '<div class="input-group mb-3">'+
      '<div class="input-group-prepend">'+
      '<span class="input-group-text">Nome</span>'+
      '</div>'+
      '<input  list="list_clientes" type="text" class="form-control" id="nm_cliente" placeholder="Nome Cliente">'+
      '</div>'+
      '<div class="input-group mb-3">'+
      '<div class="input-group-prepend">'+
      '<span class="input-group-text">Nome</span>'+
      '</div>'+
      '<input  list="list_clientes" type="text" class="form-control" id="nm_cliente" placeholder="Nome Cliente">'+
      '</div>'+
      '<div class="input-group mb-3">'+
      '<div class="input-group-prepend">'+
      '<span class="input-group-text">Nome</span>'+
      '</div>'+
      '<input  list="list_clientes" type="text" class="form-control" id="nm_cliente" placeholder="Nome Cliente">'+
      '</div>'+
      '<div class="input-group mb-3">'+
      '<div class="input-group-prepend">'+
      '<span class="input-group-text">Nome</span>'+
      '</div>'+
      '<input  list="list_clientes" type="text" class="form-control" id="nm_cliente" placeholder="Nome Cliente">'+
      '</div>'+
      '<div style="display: flex;justify-content: center;margin-bottom: -5px;margin-top: 39px;">'+
      '<button type="button" onclick=""  class="btn btn-info btn-flat">Salvar</button>' +
      '</div>'+
      '</div>'+
      '<div id="boxImport" style="display: none"></div>'

    showModal(titleModel,content)
  }
  function buttonImport(){
    const boxRegister = document.getElementById('boxRegister')
    const boxImport = document.getElementById('boxImport')
    if(boxImport.style.display == 'none'){
      boxImport.style.display = 'block'
      boxRegister.style.display = 'none'
      document.getElementById('boxImport').innerHTML = ''+
        '<div class="row">'+
          '<div class="col-lg col-6">'+
            '<div style="height: auto" class="small-box btn-default">'+
              '<div class="inner">'+
                '<h4>Importar Clientes</h4>'+
                '<form id="formImport">'+
                  '<div style="margin-top: 51px;" class="input-group mb-3">'+
                    '<div class="input-group-prepend">'+
                      '<span class="input-group-text">Arquivos</span>'+
                    '</div>'+
                      '<input style="height: 43px;" list="list_clientes" id="file" type="file" class="form-control" name="file" '+
                  '</div>'+
                '</form>'+
              '</div>'+
              '<div class="icon">'+
                '<i><img style="width: 89px;height: 75px;" src="https://icones.pro/wp-content/uploads/2021/04/icone-excel-vert.png"></i>'+
              '</div>'+
              '<div style="display: flex;justify-content: center;margin-bottom: -5px;margin-top: 39px;">'+
                '<button type="button" onclick="importExcel()"  class="btn btn-info btn-flat">Salvar</button>' +
              '</div>'+
            '</div>'+
         '</div>'+
       '</div>'
    }else {
      boxImport.style.display = 'none'
      boxRegister.style.display = 'block'
      document.getElementById('boxImport').innerHTML = ''
    }
  }
  function importExcel(){
    const dados = new FormData(document.querySelector('form#formImport'))
    const fileInput = document.getElementById('file');
    const filePath = fileInput.value;
    const allowedExtensions = /(\.csv)$/i;

    if (!allowedExtensions.exec(filePath)) {
      toastr.error('Formato do arquivo não permitido ! o arquivo deve ser no formato CSV')

    }else {
      $.ajax({
        url: '/uploadFile/customerImport',
        type: "POST",
        data: dados,
        dataType: "json",
        processData: false,
        cache: false,
        contentType: false,
        success: function (data) {
          alerta('ok');
        },
        error: function (request, status, error) {
          alert(request.responseText);
        }
      });
    }
  }
</script>
