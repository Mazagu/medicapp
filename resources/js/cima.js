function  getDrug(id)
{
  fetch('/cima/' + id, {
    method: 'GET',
    headers: { 'Content-Type': 'application/json' },
    })
  .then((response) => {
    return response;
  })
  .then((coso) => {
    console.log(coso);
    document.querySelect('body').appendChild(coso.body);
  })
  .catch(() => {
    this.message = 'Ooops! Something went wrong!'
  })
}