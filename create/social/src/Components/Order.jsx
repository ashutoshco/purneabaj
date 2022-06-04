import { TableRow } from "@mui/material";
import { TableCell } from "@mui/material";
import { TableHead } from "@mui/material";
import { Table } from "@mui/material";
import { useState } from "react";

const orderItem = (props) => {
    let[count,setCount]= useState(props.qty);
    return(
        <Table>
            <TableHead>
        <TableRow>
            <TableCell>{props.name}</TableCell>
            <TableCell>{props.price}</TableCell>
            <Button  color="error"varient="contained"  size="small" sx={{paddingx:0}} onClick={()=>setCount(count=count-1)}></Button>
            <TableCell>{props.qty}</TableCell>
            <Button  color="success"varient="contained" size="small" onClick={()=>setCount(count=count)} >-</Button>

            <TableCell>{props.price*props.QTY}</TableCell>
            <TableCell></TableCell>
        </TableRow>
        </TableHead>
        </Table>

    )
}







export default function order(props){
    return(


<Table>
<TableHead>
    <TableRow>
        <TableCell>ProductNAME </TableCell>
        <TableCell> UnitPrice</TableCell>
        <TableCell>Qty </TableCell>
        <TableCell> Total</TableCell>
        <TableCell> Action</TableCell>
    </TableRow>
</TableHead>

</Table>

    )
}







