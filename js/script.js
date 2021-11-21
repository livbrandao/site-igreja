if(window.SimpleSlide){
  new SimpleSlide({
    slide: 'cultos', // nome do atributo data-slide="principal"
    time: 5000, // tempo de transição dos slides
  });

  new SimpleSlide({
    slide: 'fotos-culto', // nome do atributo data-slide="principal"
    nav: true, // se deve ou não mostrar a navegação
    time: 5000, // tempo de transição dos slides
  });

  new SimpleSlide({
    slide: 'eventos', // nome do atributo data-slide="principal"
    nav: true,
    time: 5000, // tempo de transição dos slides
  });
}

if(window.SimpleAnime){
  new SimpleAnime();
}

if(window.SimpleForm){
new SimpleForm({
  form: ".formphp", // seletor do formulário
  button: "#enviar", // seletor do botão
  erro: "<div id='form-erro'><h3>Erro no envio!</h3><p>Um erro ocorreu, tente novamente.</p></div>", // mensagem de erro
  sucesso: "<div id='form-sucesso'><h3>Formulário enviado com sucesso</h><p>Em breve entramos em contato com você.</p></div>", // mensagem de sucesso
});
}