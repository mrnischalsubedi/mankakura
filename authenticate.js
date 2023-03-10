const PASSWORD = "admin"
let no_of_tries = 0
const container = document.getElementById("container")

// ask for password
authenticate()


// authenticate admin
function authenticate() {
    container.style.display = "none"
    let userPass;

    if (no_of_tries == 0) {
      userPass  = prompt("Please enter admin password.");
    } else {
        userPass  = prompt("Wrong passowrd. Try again.");
    }

    no_of_tries += 1

    if (userPass != PASSWORD) {
        if (no_of_tries != 3) {
            authenticate()
        } 
        else {
            window.open("/projects/index.php")
        }
    } else {
        container.style.display = "flex"
        return
    }
}