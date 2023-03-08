const triggers = [
  'primary'
];
const basicInstances = [
  'alert-primary'
];

triggers.forEach((trigger, index) => {
  let basicInstance = mdb.Alert.getInstance(document.getElementById(basicInstances[index]));
  document.getElementById(trigger).addEventListener('click', () => {
    basicInstance.show();
  });
});