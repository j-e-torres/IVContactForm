/*
    attempt to handle post request and if successful then
    be able to add error classes to input fields
    and add css functionality to make form fade out/disappear
    and have a success message displayed;
*/

// document.querySelector('#form').addEventListener('submit', async e => {
//     e.preventDefault();

//     const formData = new FormData(e.target);

//     // let response;
//     // let error;

//     fetch('/storeMessage', {
//         method: 'POST',
//         mode: 'cors',
//         headers: {
//             'Content-Type': 'application/json',
//             Accept: 'application/json'
//         },
//         body: formData
//     })
//         .then(res => {
//             alert('hmmm');
//             console.log(res);
//             return res;
//         })
//         .catch(err => {
//             alert('baaaaaaaad');
//             console.log(err.data);
//             return err;
//         });

//     // try {
//     //     // response = await fetch("{{ route('submit') }}", {
//     //     //     method: 'POST',
//     //     //     body: formData
//     //     // });

//     //     response = await fetch('/storeMessage', {
//     //         method: 'POST',
//     //         body: formData
//     //     });
//     // } catch (err) {
//     //     alert('no mon');
//     //     error = err;
//     //     console.log(err);
//     // }

//     // if (response) {
//     //     console.log(response);
//     //     // console.log(response.body);
//     // }
// });
