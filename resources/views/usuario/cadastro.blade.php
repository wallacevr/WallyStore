@extends('layout.base')

@section('titulo','Cadastro de usuário')

@section('conteudo')
    <div class='row'>
        <div class='column'>
            <form action="{{route('auth.user')}}" method="post">
                @csrf
                <br>
                <div class="panel-primary">
                            <div class="text-center p-3 mb-2 bg-primary text-white"><p class="h1">Login</p></div>


                <div class="form-group">
                <label for="email">Email:</label>    
                <input type="email" name="email" id="email" class="form-control">
                @if($errors->has('email'))
                        @foreach($errors->get('email') as $erro)
                            <strong class="erro">{{ $erro }}</strong>
                        @endforeach
                    @endif
                </div>
                <div class="form-group">
                <label for="senha">Senha:</label>    
                <input type="password" name="password" id="password" class="form-control">
                @if($errors->has('senha'))
                        @foreach($errors->get('senha') as $erro)
                            <strong class="erro">{{ $erro }}</strong>
                        @endforeach
                    @endif
                </div>
                <div class="btn">
                    <button type="submit" class="btn btn-primary">Login</button>
                    <button type="reset" class="btn btn-primary">Cancelar</button>
                </div>
            </div>

            </form>
            </div> 
            <div class='column col-md-5 col-md-offset-5'>
            <form action="{{route('salvar')}}" method="post">
                @csrf
                <br>
                <div class="panel-primary">
                <div class="text-center p-3 mb-2 bg-primary text-white"><p class="h1">Cadastro de Cliente</p></div>
            

                <div class="form-group">
                <label for="nome">Nome:</label>    
                <input type="text" name="txtnome" id="txtnome" class="form-control">
                    @if($errors->has('txtnome'))
                        @foreach($errors->get('txtnome') as $erro)
                            <strong class="erro">{{ $erro }}</strong>
                        @endforeach
                    @endif
                </div>

                <div class="form-group">
                <label for="email">Email:</label>    
                <input type="email" name="txtemail" id="txtemail" class="form-control">
                @if($errors->has('txtemail'))
                        @foreach($errors->get('txtemail') as $erro)
                            <strong class="erro">{{ $erro }}</strong>
                        @endforeach
                    @endif
                </div>
                <div class="form-group">
                <label for="txtsenha">Senha:</label>    
                <input type="password" name="txtsenha" id="txtsenha" class="form-control">
                @if($errors->has('txtsenha'))
                        @foreach($errors->get('txtsenha') as $erro)
                            <strong class="erro">{{ $erro }}</strong>
                        @endforeach
                    @endif
                </div>
                <div class="form-group">
                <label for="txtsenha2">Confirmação de Senha:</label>    
                <input type="password" name="txtsenha2" id="txtsenha2" class="form-control">
                @if($errors->has('txtsenha2'))
                        @foreach($errors->get('txtsenha') as $erro)
                            <strong class="erro">{{ $erro }}</strong>
                        @endforeach
                    @endif
                </div>
                <div class="form-group">
                
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Tipo de Usuário</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="1">Cliente</option>
                    <option value="2">Fornecedor</option>
                    <option value="3">Dropshipper</option>
                </select>
                </div>
                </div>
                <div class="form-group">
                <label for="email">Loja: http://localhost:8080/loja/</label>    
                <input type="text" name="txtloja" id="txtloja" class="form-control">
                @if($errors->has('email'))
                        @foreach($errors->get('email') as $erro)
                            <strong class="erro">{{ $erro }}</strong>
                        @endforeach
                    @endif
                </div>
                <div class="form-group">
                <label for="email">Margem de Lucro desejada</label>    
                <input type="number" name="txtlucro" id="txtlucro" min="20" max="100" class="form-control">
                @if($errors->has('email'))
                        @foreach($errors->get('email') as $erro)
                            <strong class="erro">{{ $erro }}</strong>
                        @endforeach
                    @endif
                </div>
                <div class="btn">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <button type="reset" class="btn btn-primary">Cancelar</button>
                </div>
            </div>

            </form>
            </div>  
        </div>      
@endsection    