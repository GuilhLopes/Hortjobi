*** Settings ***
Library    SeleniumLibrary
Library    String

*** Variables ***
${URL}             http://localhost:8000
${EMAIL_ADM}       adm@gmail.com
${PASS_ADM}        123456
${EMAIL}           teste@gmail.com
${PASS}            teste24
${EMAIL_ERRADO}    errado@gmail.com
${PASS_ERRADO}     15366

*** Test Cases ***

Login ADM Com Sucesso
    ${RANDOM}=    Generate Random String    8
    ${options}=   Evaluate    sys.modules['selenium.webdriver'].ChromeOptions()    sys
    ${user_dir}=  Set Variable    --user-data-dir=${TEMPDIR}/chrome-profile-${RANDOM}
    Call Method   ${options}    add_argument    ${user_dir}
    Create WebDriver    Chrome    options=${options}
    Go To    ${URL}/login
    Sleep    2s
    Input Text    name=email    ${EMAIL_ADM}
    Input Text    name=password    ${PASS_ADM}
    Click Button    Entrar
    Sleep    2s
    Location Should Contain    adm
    Close Browser

Login Com Sucesso
    ${RANDOM}=    Generate Random String    8
    ${options}=   Evaluate    sys.modules['selenium.webdriver'].ChromeOptions()    sys
    ${user_dir}=  Set Variable    --user-data-dir=${TEMPDIR}/chrome-profile-${RANDOM}
    Call Method   ${options}    add_argument    ${user_dir}
    Create WebDriver    Chrome    options=${options}
    Go To    ${URL}/login
    Sleep    2s
    Input Text    name=email    ${EMAIL}
    Input Text    name=password    ${PASS}
    Click Button    Entrar
    Sleep    2s
    Page Should Contain    Cadastro de Frutas
    Close Browser

Login com credenciais erradas
    ${RANDOM}=    Generate Random String    8
    ${options}=   Evaluate    sys.modules['selenium.webdriver'].ChromeOptions()    sys
    ${user_dir}=  Set Variable    --user-data-dir=${TEMPDIR}/chrome-profile-${RANDOM}
    Call Method   ${options}    add_argument    ${user_dir}
    Create WebDriver    Chrome    options=${options}
    Go To    ${URL}/login
    Sleep    2s
    Input Text    name=email    ${EMAIL_ERRADO}
    Input Text    name=password    ${PASS_ERRADO}
    Click Button    Entrar
    Sleep    2s
    Page Should Contain    Credenciais inválidas.
    Close Browser