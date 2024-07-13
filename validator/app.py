from flask import Flask, request, jsonify
import dns.resolver

app = Flask(__name__)

def verificar_registros_mx(dominio):
    try:
        # Consultar registros MX del dominio
        records = dns.resolver.resolve(dominio, 'MX')
        mx_records = [record.exchange.to_text() for record in records]
        
        if mx_records:
            return "valido"
        else:
            return "invalido"
    
    except dns.resolver.NoAnswer:
        return "invalido"
    except dns.resolver.NXDOMAIN:
        return "invalido"
    except Exception as e:
        return f"error: {str(e)}"

@app.route('/', methods=['GET', 'POST'])
def index():
    if request.method == 'POST':
        domain = request.form.get('domain')
        status = verificar_registros_mx(domain)
        return jsonify({'status': status})
    return '''
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario de Dominios</title>
    </head>
    <body>
        <div class="container">
            <form id="domain-form" method="POST">
                <label for="domain-input">Dominios:</label>
                <input type="text" id="domain-input" name="domain">
                <button type="submit">Validar</button>
            </form>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#domain-form').submit(function (event) {
                    event.preventDefault();
                    var domain = $('#domain-input').val();
                    $.post('/', { domain: domain }, function (data) {
                        alert('Estado del dominio: ' + data.status);
                    });
                });
            });
        </script>
    </body>
    </html>
    '''

if __name__ == '__main__':
    app.run(debug=True)
