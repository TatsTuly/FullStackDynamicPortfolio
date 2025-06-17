


document.querySelectorAll("p").forEach((varName) => {
    // console.log(varName);
    varName.addEventListener('click', () => {
        console.log(varName.innerText);
    })
});
document.querySelectorAll("button").forEach((varName) => {
    varName.onclick = function () {
        document.querySelector(".changed").innerHTML =
        `
        <p>Hello</p>
        `;

        document.querySelector("img").src = "https://images.unsplash.com/photo-1748783266832-81bc4a3d44c7?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwxMnx8fGVufDB8fHx8fA%3D%3D";
    };
});
