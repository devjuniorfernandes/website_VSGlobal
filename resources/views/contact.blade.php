@extends('layouts.main')

@section('tile', 'VS Global - Fale Connosco')

@section('content')
    <main class="mainspace">
        <div class="bannercontact">
        </div>
        <h1>Fale Connosco</h1>

        <div class="row row-cols-1 row-cols-md-2 g-2">
            <div class="col cardAddress">
                <img src="/img/office.jpeg" alt="">
                <p>Entre em contato conosco para qualquer informação sobre o processo de visto:Fale conosco pelos telefones: <strong>+244 996 566 031</strong> 08:00 - 15:00 segunda a sexta Contate-nos por email: <strong>info@vpcglobal.com</strong></p>
            </div>
            <div class="col">
                <!-- Bootstrap 5 starter form -->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">

                    <!-- Name input -->
                    <div class="mb-3">
                        <label class="form-label" for="name">Nome Compelto</label>
                        <input class="form-control" id="name" type="text" placeholder="Digite seu nome"
                            data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                    </div>

                    <!-- Email address input -->
                    <div class="mb-3">
                        <label class="form-label" for="emailAddress">E-mail Favorito</label>
                        <input class="form-control" id="emailAddress" type="email" placeholder="Digite seu e-mail"
                            data-sb-validations="required, email" />
                        <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.
                        </div>
                        <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not
                            valid.
                        </div>
                    </div>

                    <!-- Name input -->
                    <div class="mb-3">
                        <label class="form-label" for="name">Assunto do Contacto</label>
                        <input class="form-control" id="name" type="text" placeholder="Digite seu assunto"
                            data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                    </div>

                    <!-- Message input -->
                    <div class="mb-3">
                        <label class="form-label" for="message">Mensagem</label>
                        <textarea class="form-control" id="message" type="text" placeholder="Digite sua Mensagem" style="height: 10rem;"
                            data-sb-validations="required"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
                    </div>

                    <!-- Form submissions success message -->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">Form submission successful!</div>
                    </div>

                    <!-- Form submissions error message -->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>

                    <!-- Form submit button -->
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Enviar Mensagem</button>
                    </div>

                </form>
            </div>
        </div>



    </main>

@endsection
