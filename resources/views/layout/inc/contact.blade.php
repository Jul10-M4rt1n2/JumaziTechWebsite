<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">Vamos entrar em contato!</h2>
                <hr class="divider"/>
                <p class="text-muted mb-5">Pronto para iniciar seu próximo projeto conosco? Envie-nos uma mensagem e
                    retornaremos o mais breve possível!</p>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form id="contactForm" action="{{ route('enviar.formulario') }}" method="post">
                    @csrf
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..."
                               data-sb-validations="required"/>
                        <label for="name">Nome e sobrenome</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">Nome obrigatório.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com"
                               data-sb-validations="required,email"/>
                        <label for="email">Endereço de e-mail</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">E-mail obrigatório.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">E-mail inválido.</div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" name="phone" type="tel" placeholder="(123) 456-7890"
                               data-sb-validations="required"/>
                        <label for="phone">Telefone para contato</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">Telefone obrigatório.
                        </div>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" name="text" type="text" placeholder="Enter your message here..."
                                  style="height: 10rem" data-sb-validations="required"></textarea>
                        <label for="message">Conte-nos sobre o que você precisa</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">Mensagem obrigatória.</div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Envio de formulário bem-sucedido!</div>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Erro ao enviar mensagem!</div>
                    </div>
                    <!-- Submit Button-->
                    <div class="d-grid">
                        <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-4 text-center mb-5 mb-lg-0">
                <i class="bi-phone fs-2 mb-3 text-muted"></i>
                <div>+55 (065) 9 99232-5386</div>
            </div>
        </div>
    </div>
</section>
