document.addEventListener('DOMContentLoaded', function() {
    const amountInput = document.getElementById('amount');
    const fromCurrencySelect = document.getElementById('from');
    const toCurrencySelect = document.getElementById('to');
    const resultDiv = document.getElementById('result');
    
    // Definir tasas de cambio manualmente (ejemplo)
    const exchangeRates = {
        'USD': {
            'EUR': 0.93,
            'MXN': 18.31,
            'CAD':0.68
        },
        'EUR': {
            'USD': 1.47,
            'MXN': 19.61,
            'CAD': 1.47
        },
        'MXN': {
            'USD': 0.055,
            'EUR': 0.051,
            'CAD': 0.075
            
        },
        'CAD': {
            'USD': 0.73,
            'EUR': 0.68,
            'MXN': 13.38
            
        }
        // Puedes añadir más tasas de cambio según tus necesidades
    };
    function convertCurrency() {
        const amount = parseFloat(amountInput.value);
        const fromCurrency = fromCurrencySelect.value;
        const toCurrency = toCurrencySelect.value;

        // Realizar la conversión
        if (exchangeRates[fromCurrency] && exchangeRates[fromCurrency][toCurrency]) {
            const exchangeRate = exchangeRates[fromCurrency][toCurrency];
            const convertedAmount = (amount * exchangeRate).toFixed(2);
                if(amount!=0){
                    
            resultDiv.innerHTML = `${convertedAmount} ${toCurrency}`;
                } else {resultDiv.innerHTML = `0`;}
        } else {
            resultDiv.innerHTML = ` ${amount}`;
        }
    }

    // Escuchar cambios en el input de cantidad y en los select de moneda
    amountInput.addEventListener('input', convertCurrency);
    fromCurrencySelect.addEventListener('change', convertCurrency);
    toCurrencySelect.addEventListener('change', convertCurrency);
});
