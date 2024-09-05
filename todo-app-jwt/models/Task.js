import mongoose from "mongoose";

const TaskSchema = new mongoose.Schema({
    userId:{
        type: mongoose.Schema.Types.ObjectId,
        ref: "User",
        required: true
    },
    title: {
        type: String,
        required: true
    },
    completed:{
        type: Boolean,
        default: false
    }
});
const Task = mongoose.models.Task || mongoose.models('Task');

export default Task;