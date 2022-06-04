import Header from './Components/Header'; 
import './App.css';
import { Container } from '@mui/material';
import { Grid } from '@mui/material';
import Category from './Components/Category';
import img1 from './image/img1.jpg';
import { useState } from 'react';




const RecipeData=[{
  img:img1,
  title:"burger",
  price:"40"
}]

const handonclick=(data)=>{
  letCheakArray=orderData.find((item.name)=>item.name==data.title)
  setOrderData([...orderData,{name:data.title,qty:1,price:data.price}]);

}




function App() {
  const[orderData,setOrderData]=useState([]);
  const handonclick=(data)=>{
    let letCheakArray=orderData.find(item)=>item.item==data.title)
    if(letCheakArray===undefined){
      Set([])
    }
  }
  return (
    <>

    
    <Header/>
<Container maxWidth="x1">
  <Grid container>
<Grid item lg={2}>
  <Category/>

</Grid>


  </Grid>

</Container>
    </>
    

  );
}

export default App;
