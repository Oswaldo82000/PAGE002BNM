<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Banco nacional de mexico</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    
    <title>Document</title>
</head>
<body>
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-check-fill" viewBox="0 0 16 16">
  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1m1.354 4.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708"/>
</svg> <span>DATOS DE TRANFERENCIA</span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">  
         

        <form class="ms-3 me-3">
  <fieldset > 
    <div class="row">
        
    </div>
    <div class="mb-3 row">
      <label for="inputBeneficiaro" class="col-sm-4 col-form-label fw-semibold">BENEFICIARIO:</label>
      <input 
        id="inputBeneficiaro"
        class="form-control-plaintext col form-control"
        type="text"
        title="Nombre de la persona que recibe la transaccion"
        placeholder="Maria Escobosa Salazar"
        readonly>
    </div>
    <div class="mb-3 row">
      <label for="inputCuenta" class="col-sm-5 col-form-label fw-semibold">NUMERO DE CUENTA:</label>
      <input 
        id="inputCuenta"
        class="form-control-plaintext col form-control"
        type="text"
        title="Nombre de la persona que recibe la transaccion"
        placeholder="*******8756"
        readonly>
    </div>
    <div class="mb-3 row g-1">
      <label for="inputInstitucion"  class="col-6 form-label fw-semibold">INSTITUCION FINANCIERA:</label>
      <select class="col-4 form-select" id="inputInstitucion" name="emisor" title="Institución desde la cual se emite la transferencia electrónica." disabled>
        <option value="40138">ABC CAPITAL</option>
        <option value="40133">ACTINVER</option>
        <option value="40062">AFIRME</option>
        <option value="90706">ARCUS</option>
        <option value="90659">ASP INTEGRA OPC</option>
        <option value="40128">AUTOFIN</option>
        <option value="40127">AZTECA</option>
        <option value="37166">BaBien</option>
        <option value="40030">BAJIO</option>
        <option value="40002">BANAMEX</option>
        <option value="40154">BANCO COVALTO</option>
        <option value="37006">BANCOMEXT</option>
        <option value="40137">BANCOPPEL</option>
        <option value="40160">BANCO S3</option>
        <option value="40152">BANCREA</option>
        <option value="37019">BANJERCITO</option>
        <option value="40147">BANKAOOL</option>
        <option value="40106">BANK OF AMERICA</option>
        <option value="40159">BANK OF CHINA</option>
        <option value="37009">BANOBRAS</option>
        <option value="40072">BANORTE</option>
        <option value="40058">BANREGIO</option>
        <option value="40060">BANSI</option>
        <option value="2001">BANXICO</option>
        <option value="40129">BARCLAYS</option>
        <option value="40145">BBASE</option>
        <option value="40012">BBVA MEXICO</option>
        <option value="40112">BMONEX</option>
        <option value="90677">CAJA POP MEXICA</option>
        <option value="90683">CAJA TELEFONIST</option>
        <option value="90630">CB INTERCAM</option>
        <option value="40143">CIBANCO</option>
        <option value="90631">CI BOLSA</option>
        <option value="90901">CLS</option>
        <option value="90903">CoDi Valida</option>
        <option value="40130">COMPARTAMOS</option>
        <option value="40140">CONSUBANCO</option>
        <option value="90652">CREDICAPITAL</option>
        <option value="90688">CREDICLUB</option>
        <option value="90680">CRISTOBAL COLON</option>
        <option value="90723">Cuenca</option>
        <option value="40151">DONDE</option>
        <option value="90616">FINAMEX</option>
        <option value="90634">FINCOMUN</option>
        <option value="90689">FOMPED</option>
        <option value="90699">FONDEADORA</option>
        <option value="90685">FONDO (FIRA)</option>
        <option value="90601">GBM</option>
        <option value="37168">HIPOTECARIA FED</option>
        <option value="40021">HSBC</option>
        <option value="40155">ICBC</option>
        <option value="40036">INBURSA</option>
        <option value="90902">INDEVAL</option>
        <option value="40150">INMOBILIARIO</option>
        <option value="40136">INTERCAM BANCO</option>
        <option value="40059">INVEX</option>
        <option value="40110">JP MORGAN</option>
        <option value="90661">KLAR</option>
        <option value="90653">KUSPIT</option>
        <option value="90670">LIBERTAD</option>
        <option value="90602">MASARI</option>
        <option value="90722">Mercado Pago W</option>
        <option value="40042">MIFEL</option>
        <option value="40158">MIZUHO BANK</option>
        <option value="90600">MONEXCB</option>
        <option value="40108">MUFG</option>
        <option value="40132">MULTIVA BANCO</option>
        <option value="37135">NAFIN</option>
        <option value="90638">NU MEXICO</option>
        <option value="90710">NVIO</option>
        <option value="40148">PAGATODO</option>
        <option value="90620">PROFUTURO</option>
        <option value="40156">SABADELL</option>
        <option value="40014">SANTANDER</option>
        <option value="40044">SCOTIABANK</option>
        <option value="40157">SHINHAN</option>
        <option value="90646">STP</option>
        <option value="90703">TESORED</option>
        <option value="90684">TRANSFER</option>
        <option value="90656">UNAGRA</option>
        <option value="90617">VALMEX</option>
        <option value="90605">VALUE</option>
        <option value="90608">VECTOR</option>
        <option value="40113">VE POR MAS</option>
        <option value="40141">VOLKSWAGEN</option>
    </select>
    </div>
    <div class="mb-3 row">
      <label for="inputCodigoS" class="col-sm-4 col-form-label fw-semibold">CODIGO SWIFT:</label>
      <input 
        id="inputCodigoS"
        class="form-control-plaintext col form-control"
        type="text"
        title="Nombre de la persona que recibe la transaccion"
        placeholder="BNMHMXCM"
        readonly>
    </div>
    <div class="mb-3 row">
      <label for="inputMonto" class="col-sm-2 me-3 col-form-label fw-semibold">MONTO:</label>
      <input 
        id="inputMonto"
        class="form-control-plaintext col form-control"
        type="text"
        title="Nombre de la persona que recibe la transaccion"
        placeholder="39556486.00 MNX"
        readonly>
    </div>
    <div class="mb-3 row">
      <label for="inputConcepto" class="col-sm-2 me-3 col-form-label fw-semibold">Concepto:</label>
      <input 
        id="inputConcepto"
        class="form-control-plaintext col form-control"
        type="text"
        title="Nombre de la persona que recibe la transaccion"
        placeholder="Tranferencia a cuenta Personal"
        readonly>
    </div>
    <div class="mb-4 text-center">
      <label for="inputFef" class="col-sm-8 me-3 fw-normal col-form-label fw-semibold">NUMERO DE FERENCIA DE TRANFERENCIA</label>
      <input 
        id="inputFef"
        class="form-control-plaintext text-center "
        type="text"
        title="Nombre de la persona que recibe la transaccion"
        placeholder="468731556488"
        readonly> 
    </div>
    <hr>
    <div class="text-center">
    <img src = "succes.svg" height="50" alt="Tranferencia Exitosa"/>
    Tranferencia Exitosa!
    </div>
    
  </fieldset>
</form>
        </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Hide this modal and show the first with the button below.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
      </div>
    </div>
  </div>
</div>
<button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Open first modal</button>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>

