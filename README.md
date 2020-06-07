# App
Testes unitarios automatizados em PHP utilizando PhpUnit.

Para o desenho dessa solução foi escolhida a tecnolgia phpunit por ser amplamente difundida entre a comunidade de php. Foi necessario adicionar o namespace App no topo da classe original Dominio.php para a classe de teste DominioTest.php pudesse se comunicar. 

A classe DominioTest.php instancia um dominio a ser registrado pela classe Dominio.php, a mesma valida os metodos implementados na classe verificando a consistencia na manipuladao dos dados utilizados. Foram utilizados asserts para validar a chamada dos metodos para o dominio www. teste.com onde deve-se, por regra, retirar os espacos, validar se o dominio nao esta em branco, verificar a quantidade de caracteres, se nao ha numeros ou se eh um dominio ja registrado. 


# Execução

Para rodar a solucao localmente:

git clone https://github.com/jadersaldanha/App.git

cd App

compose install

./vendor/bin/phpunit

# Para rodar e ver relatorios na nuvem no CIRCLE CI

Os relatorios encontram-se em artifacts dentro do buil da pipeline. 

https://app.circleci.com/pipelines/github/jadersaldanha/App

