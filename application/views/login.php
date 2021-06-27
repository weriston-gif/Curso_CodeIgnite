<section class="about-section container-sm" >
    <div class="row">
        <div style="margin-left:25%;" class="col-lg-6 text-center">
            <h2><strong>LOGIN</strong></h2>
            <form id="login_form" method="POST" action="<?=base_url() ?>index.php/restrict/ajax_login" >
                <div class="form-group">
                    <label for="">Usuário</label>  
                    <input class="form-control" name="nome" placeholder="Seu nome" id="user">  
                </div>
                <div class="form-group">
                    <label for="">Senha</label>
                    <input type="password"  class="form-control" name="senha" id="pass" >
                </div>
                <div> 
                    <div style="text-align: center;" class="form-group">
                        <button style="margin-left: 14.5vw;" id="btn_login" type="submit" class="btn_custon second_btn">Entrar</button>
                    </div>
                    <span class="help-block"></span>
                </div>
            </form>
        </div>
    </div>
</section>