
    function validarCPF(cpf) {
        var strCPF = cpf.replace(/[^\d]+/g, '');
        var Soma;
        var Resto;
        Soma = 0;
        if (strCPF == "00000000000") return false;

        for (i = 1; i <= 9; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);
        Resto = (Soma * 10) % 11;

        if ((Resto == 10) || (Resto == 11)) Resto = 0;
        if (Resto != parseInt(strCPF.substring(9, 10))) return false;

        Soma = 0;
        for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);
        Resto = (Soma * 10) % 11;

        if ((Resto == 10) || (Resto == 11)) Resto = 0;
        if (Resto != parseInt(strCPF.substring(10, 11))) return false;

        return true;
    }

    function validarForm() {
        var cpfInput = document.getElementById("cpf");
        if (!validarCPF(cpfInput.value)) {
            alert("CPF inválido!");
            return false;
        }
        return true;
    }

    document.getElementById('vencimento').addEventListener('input', function (e) {
        var input = e.target;
        var value = input.value.replace(/\D/g, '').slice(0, 4);
        var formattedValue = value;

        if (value.length >= 3) {
            formattedValue = value.slice(0, 2) + '/' + value.slice(2, 4);
        }

        input.value = formattedValue;
    });

    document.getElementById('numero_cartao').addEventListener('input', function (e) {
        var input = e.target;
        var value = input.value.replace(/\D/g, '').slice(0, 16);
        var formattedValue = '';

        for (var i = 0; i < value.length; i++) {
            if (i > 0 && i % 4 === 0) {
                formattedValue += ' ';
            }
            formattedValue += value[i];
        }

        input.value = formattedValue;

        document.getElementById('numero_cartao').addEventListener('input', function (e) {
            var input = e.target;
            var value = input.value.replace(/\D/g, '').slice(0, 16);
            var formattedValue = '';

            for (var i = 0; i < value.length; i++) {
                if (i > 0 && i % 4 === 0) {
                    formattedValue += ' ';
                }
                formattedValue += value[i];
            }

            input.value = formattedValue;
        });
        document.getElementById('numero_cartao').addEventListener('input', function (e) {
            var input = e.target;
            var value = input.value.replace(/\D/g, '').slice(0, 16);
            var formattedValue = '';

            for (var i = 0; i < value.length; i++) {
                if (i > 0 && i % 4 === 0) {
                    formattedValue += ' ';
                }
                formattedValue += value[i];
            }

            input.value = formattedValue;
        });
    });