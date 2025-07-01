*** Settings ***
Library    SeleniumLibrary

*** Variables ***
${URL}     http://localhost:8000
${EMAIL_ADM}   adm@gmail.com
${PASS_ADM}    123456
${EMAIL}   teste@gmail.com
${PASS}   teste24
${EMAIL_ERRADO}   errado@gmail.com
${PASS_ERRADO}   15366

*** Test Cases ***
Login ADM Com Sucesso
    Open Browser    ${URL}/login    chrome
    Input Text    name=email    ${EMAIL_ADM}
    Input Text    name=password    ${PASS_ADM}
    Click Button    Entrar
    Sleep           1s
    Location Should Contain    adm
    Close Browser

Login Com Sucesso
    Open Browser    ${URL}/login    chrome
    Input Text    name=email    ${EMAIL}
    Input Text    name=password    ${PASS}
    Click Button    Entrar
    Sleep           1s
    Page Should Contain    Cadastro de Frutas
    Close Browser

Login com credenciais erradas
    Open Browser    ${URL}/login    chrome
    Input Text    name=email    ${EMAIL_ERRADO}
    Input Text    name=password    ${PASS_ERRADO}
    Click Button    Entrar
    Sleep           1s
    Page Should Contain    Credenciais inválidas.
    Close Browser
