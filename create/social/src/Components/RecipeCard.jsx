import { CardContent } from "@mui/material"
import { Typography } from "@mui/material"
import { CardMedia } from "@mui/material"
import { Card } from "@mui/material"
export default function RecipeCard(props){
    return(
     <Card>
<CardMedia src={props.img}   sx={{objectFit:"cover",height:"150"}}component="img" height="180px"/> 

<CardContent>
    <Typography  varient="h5">{props.ti}</Typography>
    <Typography  varient="h6"></Typography>
</CardContent>




        </Card>
        
        )
}