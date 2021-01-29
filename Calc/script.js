

const resetBtn = document.querySelector('button[data-value=reset-btn]'),
	delBtn = document.querySelector('button[data-name=del-btn]'),
	operationsBtn = document.querySelectorAll('button[data-name=operation-btn]'),
	numbersBtn = document.querySelectorAll('button[data-name=number-btn]'),
	calculateBtn = document.querySelector('button[data-name=calculate-btn]');

let output = document.querySelector('.output');

function numbers() {
	for (let i = 0; i < numbersBtn.length; i++) {
		numbersBtn[i].addEventListener('click', function () {
			if (output.textContent !== '0') {
				output.textContent += numbersBtn[i].getAttribute('data-value');
			} else {
				output.textContent = parseInt(numbersBtn[i].getAttribute('data-value'), 10);
			}
			console.dir(output);
		});
	}
}

numbers();

function reset() {
	resetBtn.addEventListener('click', function () {
		if (output.textContent != '') {
			output.textContent = 0;
		} else {
			output.textContent += output.getAttribute('data-value');
		}
	});
}

reset();


























// const outputDisplay = document.querySelector('.output'),
//     calcBtn = document.querySelectorAll('.calc-btn');    



//     // console.log(button);

//     for (let i = 0; i < calcBtn.length; i++) {
//         calcBtn[i].addEventListener('click', function (){
//             // console.log('click');
//             let calcBtnValue = calcBtn[i].getAttribute('data-value');
//             outputDisplay.innerHTML += calcBtnValue;
//         });
//     }

//     // function clickBtnNumber () {
//     //     for (let i = 0; i < buttonNumber.length; i++) {
//     //        let btnNumberValue = buttonNumber[i].getAttribute('data-value');
//     //         buttonNumber[i].addEventListener('click', function() {
//     //         outputDisplay.removeAttribute('data-value');
//     //         outputDisplay.innerHTML += btnNumberValue;
//     //        });

//     //     }
//     // }

//     // clickBtnNumber();

//     // button.addEventListener('click', function(){
//     //     console.log(1);
//     // })





// const input1 = document.querySelector('.input1'),
//     input2 = document.querySelector('.input2'),
//     sum = document.querySelector('.sum'),
//     calculate = document.querySelector('.calculate');

//     calculate.addEventListener('click', function(){
//         let inputVal1 = input1.getAttribute('value'),
//             inputVal2 = input2.getAttribute('value');
//             // result = inputVal1 + inputVal2;
//         console.log(input1);
//         sum.innerHTML = result;
//     });

