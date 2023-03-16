<form   method="post" action="{{route('contacto.store')}}" enctype="multipart/form-data">
    {!! csrf_field()  !!}
    <div class="row row-14 gutters-14">
      <div class="col-sm-6">
        <div class="form-wrap">
          <input class="form-input" id="contact-first-name" type="text" name="name"  value="{{old('name')}}">
              <label class="form-label" for="contact-first-name">Persona de Contacto</label>
        </div>
      </div>
   
    
    
      <div class="col-12">
        <div class="form-wrap">
          <input class="form-input" id="contact-email" type="email" name="email" value="{{old('email')}}" >
            <label class="form-label" for="contact-email">Correo Electrónico</label>
        </div>
      </div>
      
     

   
    </div>
    <button class="button button-primary button-pipaluk" type="submit">Enviar</button>
  </form>