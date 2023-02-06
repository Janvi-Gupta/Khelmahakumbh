function FillAddressInput() {
  let checkBox = document.getElementById("checkBox");

  let pAddressLine1 = document.getElementById("caddress");
  let pZipcode = document.getElementById("cpin");
  let pCity = document.getElementById("ccity");
  let pState = document.getElementById("cstate");
  let pCountry = document.getElementById("cdis");

  let curAddressLine1 = document.getElementById("paddress");
  let curZipcode = document.getElementById("ppin");
  let curCity = document.getElementById("pcity");
  let curState = document.getElementById("pstate");
  let curCountry = document.getElementById("pdis");
  if (checkBox.checked == true) {
    let pAddressLine1Value = pAddressLine1.value;
    let pZipcodeValue = pZipcode.value;
    let pCityValue = pCity.value;
    let pStateValue = pState.value;
    let pCountryValue = pCountry.value;
    curAddressLine1.value = pAddressLine1Value;
    curZipcode.value = pZipcodeValue;
    curCity.value = pCityValue;
    curState.value = pStateValue;
    curCountry.value = pCountryValue;
  } else {
    curAddressLine1.value = "";
    curAddressLine2.value = "";
    curLandmark.value = "";
    curZipcode.value = "";
    curCity.value = "";
    curState.value = "";
    curCountry.value = "";
  }
}
