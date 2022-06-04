import { Typography } from "@mui/material"
import { Button } from "@mui/material"
import { Toolbar } from "@mui/material"
import { AppBar,Box } from "@mui/material"


export default function Header(){
    return  (
        <AppBar position="static">
            <Toolbar>

<Box sx={{flex:1.8}}>
<Button color="inherit">keyBoard</Button>
<Button color="inherit">keyBoard</Button>
<Button color="inherit">keyBoard</Button>
<Button color="inherit">keyBoard</Button>

</Box>
<Typography sx={{flex:0.7}}>Restro</Typography>
<Box sx={{flex:2}}>
    <Button color="inherit">SalerETURN</Button>
    <Button color="inherit">SalerETURN</Button>
    <Button color="inherit">SalerETURN</Button>
    <Button color="inherit">SalerETURN</Button>
</Box>
            </Toolbar>

        </AppBar>
    )
};