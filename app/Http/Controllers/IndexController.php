<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    public function index(){

        $posts = [
            "0" => "Structured Query Language, ou Linguagem de Consulta Estruturada
                    ou SQL, é a linguagem de pesquisa declarativa padrão para banco de
                    dados relacional (base de dados relacional). Muitas das características
                    originais do SQL foram inspiradas na álgebra relacional. (Wikipédia)",

            "1" => "Em vários servidores web (geralmente Apache), .htaccess (hypertext access)
                    é o nome padrão de um arquivo de configuração a nível de diretório que
                    permite um gerenciamento descentralizado das configurações do servidor web.
                    Ele é colocado dentro de cada diretório ou subdiretório onde se deseje
                    subescrever as configurações de escopo global; o alcance desta subconfiguração
                    é determinada pelo administrador do servidor. (Wikipédia).",

            "2" => "Esqueceu a fonte que utilizou para criar uma imagem/logo ?
                    Não tem problema… Existe uma ferramenta que ajuda a identificar
                    a fonte a partir de uma imagem."

        ];

        return view('index.index', compact('posts'));

    }
}
