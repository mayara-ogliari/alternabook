<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-xs-12">
                <div class="card bg-dark text-light shadow-lg border-0 rounded-lg mt-5">
                    <div class="text-center">
                        <h3 class="text-center my-4">Login</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label class="small mb-1" for="email"></label>
                                <input class="form-control py-4 inputs" 
                                    id="email"
                                    name="email"
                                    type="email" 
                                    aria-describedby="emailHelp" 
                                    placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="password"></label>
                                <input class="form-control py-4 inputs" 
                                    id="password"
                                    name="password"
                                    type="password" 
                                    placeholder="Senha">
                            </div>
                            <div>
                                <button class="form-control btn-dark">
                                    Entrar
                                </button>
                            </div>
                            <!-- <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <a class="small color-link" routerLink="/recuperacao-senha">Esqueceu sua senha?</a>
                            </div> -->
                        </form>
                    </div>
                    <div class="card-mobile card-footer footer text-center">
                        <div ><a class="small color-link" href="/cadastro">Criar conta</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>